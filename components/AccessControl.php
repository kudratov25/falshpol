<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.02.2023
 * Time: 00:49
 */

namespace app\components;

/**
 * Class AccessControl
 * @package app\components
 */
class AccessControl extends \yii\filters\AccessControl
{
    public $rules = [];
    public function init()
    {
        parent::init(); 
    }

    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }
}