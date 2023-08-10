<?php

use app\modules\admin\models\HomeCompletedProjects;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Home/ Реализованные проекты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-completed-projects-index">

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
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HomeCompletedProjects $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
