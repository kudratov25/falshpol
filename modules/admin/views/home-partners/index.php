<?php

use app\modules\admin\models\HomePartners;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Партнеры');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-partners-index">


    <p>
        <?= Html::a(Yii::t('app', 'Добавить'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'title_en:ntext',
            'title_ru:ntext',
            'title_uz:ntext',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img('/web/' . $data['image'], ['width' => '100px']);
                },
            ],
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HomePartners $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
