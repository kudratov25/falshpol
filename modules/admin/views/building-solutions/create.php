<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\BuildingSolutions $model */

$this->title = Yii::t('app', 'Create Строительные решения');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Строительные решения'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building-solutions-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
