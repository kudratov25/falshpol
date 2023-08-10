<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeCertificates $model */

$this->title = Yii::t('app', 'Создавать сертификаты');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'сертификаты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-certificates-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
