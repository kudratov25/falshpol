<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeWhyUs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="home-why-us-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
