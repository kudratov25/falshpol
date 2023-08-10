<?php

use app\modules\admin\models\SocialLink;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Ссылки и адрес');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-link-index">
    <?php
    if (empty($dataProvider)) {
    ?>
        <p>
            <?= Html::a(Yii::t('app', 'Cоздать'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?
    } ?>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'telegram',
            'facebook',
            'instagram',
            'phone_number',
            'email:email',
            'address',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SocialLink $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>