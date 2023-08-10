<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\FalshpolTypeShow $model */

$this->title = Yii::t('app', 'Обновит типа фальшпол: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'типа фальшпол'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="falshpol-type-show-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
