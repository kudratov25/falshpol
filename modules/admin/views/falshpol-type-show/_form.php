<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\FalshpolTypeShow $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="falshpol-type-show-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'header_image')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>
    <?= $form->field($model, 'head_title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'head_text_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'head_text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'head_text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'full_text_en')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>
    <?= $form->field($model, 'full_text_ru')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>
    <?= $form->field($model, 'full_text_uz')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

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