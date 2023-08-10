<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\MontageHeader $model */

$this->title = Yii::t('app', 'Добавить Монтаж');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="montage-header-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
