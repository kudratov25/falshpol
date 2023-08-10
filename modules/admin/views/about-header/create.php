<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\AboutHeader $model */

$this->title = Yii::t('app', 'Create About Header');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Headers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-header-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
