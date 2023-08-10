<?php

use app\modules\admin\models\HomeCertificates;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Сертификаты и лицензии');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-certificates-index">

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
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img('/web/' . $data['image'], ['width' => '100px']);
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'urlCreator' => function ($action, HomeCertificates $model, $key, $index) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>