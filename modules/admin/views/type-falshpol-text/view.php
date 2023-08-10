<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TypeFalshpolText $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Типы фальшпола Text'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="type-falshpol-text-view">


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
                'value' => Html::img(Yii::getAlias('/web/' . $model->image1), ['class' => 'img-responsive', 'width' => '100']),
                'format' => 'raw'
            ],
            [
                'label' => 'Header Image',
                'value' => Html::img(Yii::getAlias('/web/' . $model->image2), ['class' => 'img-responsive', 'width' => '100']),
                'format' => 'raw'
            ],
            'text1_en:ntext',
            'text1_ru:ntext',
            'text1_uz:ntext',
            'text2_en:ntext',
            'text2_ru:ntext',
            'text2_uz:ntext',
            'text3_en:ntext',
            'text3_ru:ntext',
            'text3_uz:ntext',
            'text4_en:ntext',
            'text4_ru:ntext',
            'text4_uz:ntext',
            'created_at:ntext',
        ],
    ]) ?>

</div>
