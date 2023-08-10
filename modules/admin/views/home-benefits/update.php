<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeBenefits $model */

$this->title = Yii::t('app', 'Обновить Home-Преимущества: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Home-Преимущества'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="home-benefits-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
