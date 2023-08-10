<?php

use app\modules\admin\models\HomeBenefits;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Home-Преимущества');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-benefits-index">

    <?php
    if (empty($dataProvider)) {
    ?>
        <p>
            <?= Html::a(Yii::t('app', 'Создать Home-Преимущества'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?
    }
    ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


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
                'urlCreator' => function ($action, HomeBenefits $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>