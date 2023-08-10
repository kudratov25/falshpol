<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 18:48
 */

namespace app\components;

use app\components\NotFoundHttpException;
use Yii;
use app\components\RootBaseController;
use yii\filters\AccessControl;
use yii\ForbiddenHttpException;

class RootController extends RootBaseController
{
    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            "access" => [
                "class" => AccessControl::class,
                "rules" => [
                    [
                        "actions" => ["login", "logout"],
                        "allow" => true,
                        "roles" => ["?"],
                    ],
                    [
                        "allow" => true,
                        "roles" => ["@", "admin"],
                    ],
                ],
            ],
        ];
    }
    /**
     * @param \yii\base\Action $action
     * @return bool
     * @throws NotFoundHttpException
     * @throws \yii\web\BadRequestHttpException
     */

    public function beforeAction($action)
    {
        if (!Yii::$app->user->isGuest) {
            $cid = Yii::$app->controller->id;
            $aid = Yii::$app->controller->action->id;
            if ($aid === "logout") {
                return parent::beforeAction($action);
            }
            //parol o'zgartirish
            if (
                $cid === "admin" &&
                ($aid === null || $aid === "change-password")
            ) {
                return parent::beforeAction($action);
            }
            //index
            if ($cid === "admin" && ($aid === null || $aid === "index")) {
                return parent::beforeAction($action);
            }
            //userga notification berish
            if (!RootUser::access("{$cid}/{$aid}")) {
                echo '<script language="javascript">';
                echo 'alert("У вас недостаточно прав для выполнения данного действия");';
                echo "history.back();";
                echo "</script>";
                return false;
            }
        }

        return parent::beforeAction($action);
    }
}
