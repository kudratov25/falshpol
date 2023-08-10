<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\BuildingSolutions $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="building-solutions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'header_image')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>

    <?= $form->field($model, 'title_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text1_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text1_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text1_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text3_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text3_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text3_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image_1')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>
    <?= $form->field($model, 'image_2')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>