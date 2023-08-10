<?php

use app\modules\admin\models\ProjectShow;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Проекты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-show-index">

    <p>
        <?= Html::a(Yii::t('app', 'Добавить'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


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
                'urlCreator' => function ($action, ProjectShow $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
