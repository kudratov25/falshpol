<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\AboutInfo $model */

$this->title = Yii::t('app', 'Обновить информацию о нас: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'О компании'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Обновлять');
?>
<div class="about-info-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
