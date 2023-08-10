<?php

use app\modules\admin\models\AboutInfo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'О компании');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-info-index">
    <?php if (empty($dataProvider)) {
    ?>
        <p>
            <?= Html::a(Yii::t('app', 'Создать О компании'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?
    } ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'number',
            'title_ru',
            'title_en',
            'title_uz',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AboutInfo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>