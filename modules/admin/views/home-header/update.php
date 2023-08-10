<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeHeader $model */

$this->title = Yii::t('app', 'Обновлять Текст для баннера: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Текст для баннера'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Обновлять');
?>
<div class="home-header-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
