<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeHeader $model */

$this->title = Yii::t('app', 'Создать Текст для баннера');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Текст для баннера'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-header-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
