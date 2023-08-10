<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeBenefits $model */

$this->title = Yii::t('app', 'Создать Home-Преимущества');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Home-Преимущества'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-benefits-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
