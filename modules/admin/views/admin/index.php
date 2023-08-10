<?php

use coderius\hitCounter\widgets\hitCounter\HitCounterWidget;
use app\models\Application;
use app\models\Visitor;
use app\widgets\VisitorCounterWidget;
//24 soatdagi xabar va kirgan odamlar soni
$count = (new Application())->getNewApplicationsCount();
$numVisitors = Visitor::getVisitorsLast24Hours();
$this->title = "Панель управления";
$this->params["breadcrumbs"] = [["label" => $this->title]];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\SmallBox::widget([
                "title" => $count,
                "text" => "Новое сообщение",
                "linkText" => "Открыть все сообщения",
                "icon" => "fas fa-envelope",
                "linkUrl" => "admin/applications",
            ]) ?>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?php $smallBox = \hail812\adminlte\widgets\SmallBox::begin([
                "title" => $numVisitors,
                "text" => "Посещаемость сайта за день",
                "icon" => "fas fa-user",
                "theme" => "success",
            ]); ?>

            <?php \hail812\adminlte\widgets\SmallBox::end(); ?>
        </div>
    </div>
</div>