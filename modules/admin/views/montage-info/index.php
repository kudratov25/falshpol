<?php

use app\modules\admin\models\MontageInfo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Информация о монтаже');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="montage-info-index">


    <p>
        <?= Html::a(Yii::t('app', 'Добавить Информация о монтаже'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          
            'title_en:ntext',
            'title_ru:ntext',
            'title_uz:ntext',
            'text_en:ntext',
            //'text_ru:ntext',
            //'text_uz:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MontageInfo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
