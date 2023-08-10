<?php

/** @var yii\web\View $this */

use app\components\ApplicationWidget;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Проекты');
$this->params['breadcrumbs'][] = $this->title;
$lang = Yii::$app->language;
?>


<section data-bs-version="5.1" class="header6 cid-tvUCg27sjA" id="header6-7o">

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong><?= Yii::t('common', 'Проекты') ?></strong></h1>

                <p class="mbr-text mbr-white mbr-fonts-style display-7">
                    <?= Yii::t('common', 'Главная ➤ Проекты') ?>
                    <br><br>
                    <?php
                    if (!empty($projects_header)) {
                        foreach ($projects_header as $project) {
                            echo ($project['text_' . $lang]);
                            echo ('</br>');
                            echo ('</br>');
                        }
                    }
                    ?>
                </p>

            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery1 cid-tuNPvxuzru" id="gallery1-2e">


    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong><?= Yii::t('common', 'Проекты') ?></strong>
            </h4>

        </div>
        <div class="row mt-4">
            <?php
            if (!empty($model)) {
                foreach ($model as $project) {
            ?>
                    <div class="item features-image сol-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?= $project['image'] ?>" loading="lazy" class="lazyload" data-src="<?= Yii::getAlias('@web') . '/web/' . $project['image'] ?>">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7"><strong><?= $project['title_' . $lang] ?></strong></h5>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="<?= yii\helpers\Url::to(['project-show', 'id' => $project->id]) ?>" class="btn btn-primary item-btn display-4"><?= Yii::t('common', 'Подробнее') ?></a></div>
                        </div>
                    </div>

            <?
                }
            }
            ?>

        </div>
    </div>
</section>

<!-- second form as widget -->
<?= ApplicationWidget::widget([]) ?>
<!-- /.form end -->

<!-- Сертификаты -->
<?= $this->render('../components/certificate') ?>
<!-- /.Сертификаты -->