<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TypeFalshpolText $model */

$this->title = Yii::t('app', 'Обновлять Типы фальшпола: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Типы фальшпола Text'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="type-falshpol-text-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
