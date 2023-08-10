<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 14:13
 */

namespace app\components;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\User;
use app\models\UserPermissionsModel;
use app\models\UserRolesModel;
use app\components\BasicRoot;
use yii\web\ForbiddenHttpException;

class RootUser extends \yii\web\User
{
    public $_user;
    public static $permissions = [];

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
{
    parent::init();

    if ($this->identity) {
        $this->_user = $this->identity;
        self::$permissions = ArrayHelper::map(
            UserPermissionsModel::find()
                ->where([
                    "role_id" => $this->identity->role_id,
                ])
                ->all(),
            "route",
            "access"
        );
    } else {
        $this->logout();
    }
}
    public function checkRole($user)
    {
        if (!$this->isGuest) {
            $user = $this->identity;
            if ($user->role_id !== User::ROLE_ADMIN) {
                throw new ForbiddenHttpException(
                    "Вы не авторизованы для выполнения этих действий!"
                );
            }
            self::$permissions = ArrayHelper::map(
                UserPermissionsModel::find()
                    ->where([
                        "role_id" => $user->role_id,
                    ])
                    ->all(),
                "route",
                "access"
            );
        } else {
            $this->logout();
        }
    }

    public static function access($route = false, $exp = "or")
    {
        if (is_array($route)) {
            $result = $exp === "and" ? true : false;
            foreach ($route as $r) {
                if ($exp === "or") {
                    $result = $result || self::access($r);
                } elseif ($exp === "and") {
                    $result = $result && self::access($r);
                }
            }

            return $result;
        }

        if ($route === false) {
            $route =
                Yii::$app->controller->id .
                "/" .
                Yii::$app->controller->action->id;
        }

        if (strpos($route, "/") === false) {
            $route = Yii::$app->controller->id . "/" . $route;
        }
        if (isset(self::$permissions["*"]) && self::$permissions["*"]) {
            return true;
        }

        if (isset(self::$permissions[$route]) && self::$permissions[$route]) {
            return true;
        }

        return false;
    }

    public function getUser()
    {
        return $this->_user;
    }
}
