<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\MontageInfo $model */

$this->title = Yii::t('app', 'Обновить Информация о монтаже: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Информация о монтаже'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="montage-info-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
