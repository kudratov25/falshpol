<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ProjectGallery $model */

$this->title = Yii::t('app', 'Создать галерею проектов');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Project Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-gallery-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
