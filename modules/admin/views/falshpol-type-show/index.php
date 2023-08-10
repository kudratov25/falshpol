<?php

use app\modules\admin\models\FalshpolTypeShow;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Типа фальшпол');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="falshpol-type-show-index">

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
            'head_title_en',
            'head_title_ru',
            'head_title_uz',
            'head_text_en:ntext',
            //'head_text_ru:ntext',
            //'head_text_uz:ntext',
            //'title_en',
            //'title_ru',
            //'title_uz',
            //'text_en:ntext',
            //'text_ru:ntext',
            //'text_uz:ntext',
            //'full_text_en:ntext',
            //'full_text_ru:ntext',
            //'full_text_uz:ntext',
            //'image',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, FalshpolTypeShow $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>