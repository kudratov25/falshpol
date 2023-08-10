<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\AboutInfo $model */

$this->title = Yii::t('app', 'Создать «О компании»');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'О компании'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-info-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
