<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\HomeBenefits $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Home-Преимущества'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="home-benefits-view">


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
            'title_en',
            'title_ru',
            'title_uz',
            'text_en:ntext',
            'text_ru:ntext',
            'text_uz:ntext',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'created_at',
        ],
    ]) ?>

</div>