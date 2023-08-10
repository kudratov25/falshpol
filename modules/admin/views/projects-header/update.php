<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ProjectsHeader $model */

$this->title = Yii::t('app', 'Обновлять проекты/ header text: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'проекты/ header text'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="projects-header-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
