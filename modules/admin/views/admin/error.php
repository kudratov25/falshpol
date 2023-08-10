<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="error-page">
    <div class="error-content" style="margin-left: auto;">
        <h3><i class="fas fa-exclamation-triangle text-danger"></i> <?= Html::encode($name) ?></h3>

        <p>
            <?= nl2br(Html::encode($message)) ?>
        </p>

        <p>
            К сожалению, запрошенная вами страница не может быть найдена на сервере. Возможно, он был удален, перемещен или никогда не существовал. Пожалуйста, проверьте правильность введенного адреса. Если проблема не устранена, свяжитесь с нами для получения дополнительной помощи.
            <br>
            <br>
            <?= \yii\helpers\Html::a('Go Home', ['/admin/admin/index'], ['class' => 'btn btn-success']) ?>

        </p>
    </div>
</div>