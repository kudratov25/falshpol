<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeWhyUs $model */

$this->title = Yii::t('app', 'Добавить');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Почему мы?'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-why-us-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
