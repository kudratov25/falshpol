<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeCompletedProjects $model */

$this->title = Yii::t('app', 'Обновить Реализованные проекты: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Реализованные проекты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="home-completed-projects-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
