<?php

/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.02.2023
 * Time: 02:14
 */

namespace app\modules\admin\components;

/**
 * Class NotFoundHttpException
 * @package app\base\components
 */
class NotFoundHttpException extends \yii\web\NotFoundHttpException
{
    
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {

        if (!isset($message))
            $message = t("Error 404: Page not found.");

        parent::__construct($message, $code, $previous);
    }
}
