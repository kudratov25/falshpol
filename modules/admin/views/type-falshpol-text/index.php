<?php

use app\modules\admin\models\TypeFalshpolText;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Типы фальшпола Text');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-falshpol-text-index">

    <?php
    if (empty($dataProvider)) {
    ?>
        <p>
            <?= Html::a(Yii::t('app', 'Create Типы фальшпола Text'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?
    } ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'image1',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image1, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            [
                'attribute' => 'image2',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image2, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'text1_en:ntext',
            'text1_ru:ntext',
            //'text1_uz:ntext',
            //'text2_en:ntext',
            //'text2_ru:ntext',
            //'text2_uz:ntext',
            //'text3_en:ntext',
            //'text3_ru:ntext',
            //'text3_uz:ntext',
            //'text4_en:ntext',
            //'text4_ru:ntext',
            //'text4_uz:ntext',
            //'created_at:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TypeFalshpolText $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>