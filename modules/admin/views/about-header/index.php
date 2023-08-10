<?php

use app\modules\admin\models\AboutHeader;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'About Headers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-header-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create About Header'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text_en:ntext',
            'text_ru:ntext',
            'text_uz:ntext',
            'image',
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AboutHeader $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
