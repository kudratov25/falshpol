<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\MontageInfo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="montage-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
