<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ProjectsHeader $model */

$this->title = Yii::t('app', 'Добавить проекты Header');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'проекты Headers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-header-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
