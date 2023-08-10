<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\SocialLink $model */

$this->title = Yii::t('app', 'Обновлять Ссылки и адрес: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ссылки и адрес'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="social-link-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
