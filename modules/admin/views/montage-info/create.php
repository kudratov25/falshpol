<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\MontageInfo $model */

$this->title = Yii::t('app', 'Добавить Информация о монтаже');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Информация о монтаже'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="montage-info-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
