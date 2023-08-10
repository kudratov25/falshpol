<?php

use app\modules\admin\models\HomeClients;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Клиенты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-clients-index">


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
                'urlCreator' => function ($action, HomeClients $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
