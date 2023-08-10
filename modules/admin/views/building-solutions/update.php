<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\BuildingSolutions $model */

$this->title = Yii::t('app', 'Строительные решения: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Строительные решения'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Обновить');
?>
<div class="building-solutions-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
