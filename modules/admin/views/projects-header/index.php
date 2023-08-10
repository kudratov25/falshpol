<?php

use app\modules\admin\models\ProjectsHeader;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'проекты/ header text');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-header-index">


        <p>
            <?= Html::a(Yii::t('app', 'Добавить'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'text_en:ntext',
            'text_ru:ntext',
            'text_uz:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProjectsHeader $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>