<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeCompletedProjects $model */

$this->title = Yii::t('app', 'Добавить Реализованные проекты');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Реализованные проекты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-completed-projects-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
