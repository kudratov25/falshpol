<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\FalshpolTypeShow $model */

$this->title = Yii::t('app', 'Создать типа фальшпол');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Типа фальшпол'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falshpol-type-show-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
