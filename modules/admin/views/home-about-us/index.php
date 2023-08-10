<?php

use app\modules\admin\models\HomeAboutUs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Home - О нас');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-about-us-index">

    <?php
    if (empty($dataProvider)) {
    ?>
        <p>
            <?= Html::a(Yii::t('app', 'Создать'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?
    }
    ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'text_en:ntext',
            'text_ru:ntext',
            // 'text_uz:ntext',
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
                'urlCreator' => function ($action, HomeAboutUs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>