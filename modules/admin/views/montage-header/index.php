<?php

use app\modules\admin\models\MontageHeader;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Монтаж header');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="montage-header-index">


    <p>
        <?= Html::a(Yii::t('app', 'Монтаж'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'text_en:ntext',
            'text_ru:ntext',
            'text_uz:ntext',
            'youtube_link:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MontageHeader $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
