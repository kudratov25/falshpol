<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.11.2022
 * Time: 22:18
 */

use yii\base\Component;
use Yii;


class MaintenanceMode extends Component
{
    public $enabledMode = true;
    public $capUrl = "maintenance/index";
    public $message = "Извините, сайт Falshpol в настоящее время находится на техническом обслуживании. Пожалуйста, вернитесь через несколько минут.";

    public $users = ["user"];
    public $roles = ["admin"]; //rolde_id 1 

    public $ips = []; //ofis IPsini qo'shish

    public $urls = [];

    public function init(): void
    {
        if ($this->enabledMode) {
            $disable = in_array(
                Yii::$app->user->identity->username,
                $this->users,
                true
            );
            foreach ($this->roles as $role) {
                $disable = $disable || Yii::$app->user->can($role);
            }

            $disable =
                $disable ||
                in_array(Yii::$app->request->getPathInfo(), $this->urls, true);

            $disable = $disable || in_array($this->getIp(), $this->ips, true);

            if (!$disable) {
                if ($this->capUrl === "maintenance/index") {
                    Yii::$app->controllerMap["maintenance"] =
                        "application.extensions.MaintenanceMode.MaintenanceController";
                }

                Yii::$app->catchAllRequest = [$this->capUrl];
            }
        }
    }
    protected function getIp()
    {
        $strRemoteIP = $_SERVER["REMOTE_ADDR"];
        if (!$strRemoteIP) {
            $strRemoteIP = urldecode(getenv("HTTP_CLIENTIP"));
        }
        if (getenv("HTTP_X_FORWARDED_FOR")) {
            $strIP = getenv("HTTP_X_FORWARDED_FOR");
        } elseif (getenv("HTTP_X_FORWARDED")) {
            $strIP = getenv("HTTP_X_FORWARDED");
        } elseif (getenv("HTTP_FORWARDED_FOR")) {
            $strIP = getenv("HTTP_FORWARDED_FOR");
        } elseif (getenv("HTTP_FORWARDED")) {
            $strIP = getenv("HTTP_FORWARDED");
        } else {
            $strIP = $_SERVER["REMOTE_ADDR"];
        }

        if ($strRemoteIP != $strIP) {
            $strIP = $strRemoteIP . ", " . $strIP;
        }
        return $strIP;
    }
}
