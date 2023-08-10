<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\SocialLink $model */

$this->title = Yii::t('app', 'Create Social Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Social Links'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-link-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
