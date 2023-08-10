<?php

namespace app\widgets;

use yii\bootstrap\ActiveForm as BootstrapActiveForm;
use Yii;

/**
 * Class ActiveForm
 * @package app\widgets
 */
class ActiveForm extends BootstrapActiveForm
{
    public $enableClientValidation = false;
    public $enableAjaxValidation = true;

    public $fieldClass = 'app\widgets\ActiveField';
    public $errorCssClass = "text-danger";
    public $fieldConfig = [
        'errorOptions' => ['class' => 'text-danger'],
    ];
}