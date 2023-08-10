<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomePartners $model */

$this->title = Yii::t('app', 'Добавить Партнеры');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Home Partners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-partners-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
