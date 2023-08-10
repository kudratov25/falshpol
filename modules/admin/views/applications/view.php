<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = Yii::t('app', $model->name);
$this->params['breadcrumbs'][] = $this->title;
$counter = 0;
?>
<div class="row">
    <?php
    $session_message = Yii::$app->session->getFlash('success');
    if ($session_message !== null) {
    ?>
        <div class="col-lg-6">
            <?= \hail812\adminlte\widgets\Alert::widget([
                'type' => 'success',
                'title' => $session_message,
            ]) ?>
        </div>
    <?
    }
    ?>

    <div class="col-md-12">

        <p>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    </div>
    <div class="col-md-12">

        <?= DetailView::widget([
            'model' => $model,

            'attributes' => [
                // 'id',
                'name',
                'ip_address',
                'phone_number',
                [
                    'attribute' => 'date',
                    'label' => 'Время',
                    'value' => function ($model) {
                        $dateTime = new DateTime($model->date, new DateTimeZone('Asia/Tashkent'));
                        return Yii::$app->formatter->asDatetime($dateTime->getTimestamp(), 'MMM d, H:mm');
                    },
                ],
                [
                    'attribute' => 'status',
                    'label' => 'Статус',
                    'value' => function ($model) {
                        if ($model->status == 0) {
                            return '<span class="badge bg-warning"> Непрочитано ..</span>';
                        } elseif ($model->status == 1) {
                            return '<span class="badge bg-success">Прочитано</span>';
                        } else {
                            return '';
                        }
                    },
                    'format' => 'raw',
                ],
            ],
        ]) ?>
    </div>
</div>