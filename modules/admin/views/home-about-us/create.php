<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeAboutUs $model */

$this->title = Yii::t('app', 'Создать дом - О нас');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Home About uses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-about-us-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
