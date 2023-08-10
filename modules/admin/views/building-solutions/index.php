<?php

use app\modules\admin\models\BuildingSolutions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Строительные решения');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="building-solutions-index">


    <p>
        <?= Html::a(Yii::t('app', 'Создать'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->header_image, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'title_en:ntext',
            'title_ru:ntext',
            'title_uz:ntext',
            //'text1_en:ntext',
            //'text1_ru:ntext',
            //'text1_uz:ntext',
            //'text2_en:ntext',
            //'text2_ru:ntext',
            //'text2_uz:ntext',
            //'text3_en:ntext',
            //'text3_ru:ntext',
            //'text3_uz:ntext',
            //'image_1',
            //'image_2',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BuildingSolutions $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>