<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeAboutUs $model */

$this->title = Yii::t('app', 'Обновление Главная О нас: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Главная-О нас'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Обновлять');
?>
<div class="home-about-us-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
