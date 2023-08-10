<?php

use app\modules\admin\models\HomeWhyUs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Почему мы');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-why-us-index">
    <p>
        <?= Html::a(Yii::t('app', 'Cоздать'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title_en',
            'title_ru',
            'title_uz',
            'text_en:ntext',
            //'text_ru:ntext',
            //'text_uz:ntext',
            //'image',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HomeWhyUs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>