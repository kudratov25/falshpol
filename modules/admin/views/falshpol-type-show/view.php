<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\FalshpolTypeShow $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'типа фальшпол'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="falshpol-type-show-view">


    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'label' => 'Header Image',
                'value' => Html::img(Yii::getAlias('/web/' . $model->header_image), ['class' => 'img-responsive', 'width' => '100']),
                'format' => 'raw'
            ],
            'head_title_en',
            'head_title_ru',
            'head_title_uz',
            'head_text_en:ntext',
            'head_text_ru:ntext',
            'head_text_uz:ntext',
            'title_en',
            'title_ru',
            'title_uz',
            'text_en:ntext',
            'text_ru:ntext',
            'text_uz:ntext',
            'full_text_en:ntext',
            'full_text_ru:ntext',
            'full_text_uz:ntext',
            [
                'label' => 'Image',
                'value' => Html::img(Yii::getAlias('/web/' . $model->image), ['class' => 'img-responsive', 'width' => '100']),
                'format' => 'raw'
            ],
            'created_at',
        ],
    ]) ?>

</div>
