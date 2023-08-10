<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TypeFalshpolText $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="type-falshpol-text-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image1')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>
    <?= $form->field($model, 'image2')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>
    <?= $form->field($model, 'text1_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text1_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text1_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text3_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text3_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text3_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text4_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text4_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text4_uz')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>