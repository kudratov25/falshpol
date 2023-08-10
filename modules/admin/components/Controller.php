<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 02.03.2023
 * Time: 14:52
 */

namespace app\modules\admin\components;
use yii\filters\AccessControl;
use app\components\NotFoundHttpException;
use Yii;
use app\components\BaseController;

class Controller extends \yii\web\Controller
{
    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', "logout"],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}