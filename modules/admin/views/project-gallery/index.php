<?php

use app\modules\admin\models\ProjectGallery;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Галереи проектов');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-gallery-index">

    <h1><?//= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Создать '), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'attribute' => 'project_show_id',
                'label' =>'Название проекта',
                'value' => function ($model) {
                    return $model->projectShow->title_ru;
                },
            ],
            [
                'attribute' => 'image',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img('/web/' . $data['image'],
                        ['width' => '70px']);
                },
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {delete}', // remove {update} button
                'urlCreator' => function ($action, ProjectGallery $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
