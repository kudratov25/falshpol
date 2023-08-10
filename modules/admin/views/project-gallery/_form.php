<?php

use app\modules\admin\models\ProjectShow;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ProjectGallery $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="project-gallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>


    <?= $form->field($model, 'project_show_id')->dropDownList(
        ArrayHelper::map(ProjectShow::find()->all(), 'id', 'title_ru'),
        ['prompt' => 'Выберите проект']
    ) 
    ?>



    <?= $form->field($model, 'image[]')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*',
            'multiple' => true,
        ],
        'pluginOptions' => [
            'maxFileCount' => 20,
        ],
    ]); ?>




    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>