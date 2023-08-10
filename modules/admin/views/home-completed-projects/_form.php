<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeCompletedProjects $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="home-completed-projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title_uz')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
