<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ProjectShow $model */

$this->title = Yii::t('app', 'Добавить проекты');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Проекты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-show-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
