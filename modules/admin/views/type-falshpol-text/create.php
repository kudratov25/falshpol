<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TypeFalshpolText $model */

$this->title = Yii::t('app', 'Добавить Типы фальшпола Text');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Type Falshpol Texts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-falshpol-text-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
