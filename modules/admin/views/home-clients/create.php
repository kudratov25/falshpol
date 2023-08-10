<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeClients $model */

$this->title = Yii::t('app', 'Create Home Clients');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Home Clients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-clients-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
