<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = Yii::t('app', 'О компании');
$this->params['breadcrumbs'][] = $this->title;

$lang = Yii::$app->language;
?>


<section data-bs-version="5.1" class="header14 cid-tECTpjpYRH" id="header14-bf">
    <div class="container-fluid container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 image-wrapper">
                <?php
                if (!empty($about_header)) {
                    echo Html::img(Yii::getAlias('@web') . '/web/' . $about_header['image'], ['alt' => $about_header['image']]);
                }
                ?>
            </div>
            <div class="col-12 col-md-6">
                <div class="card-wrapper">
                    <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong><?= Yii::t('common', 'О нас') ?></strong>
                    </h1>

                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php
                        if (!empty($about_header)) {
                            echo $about_header['text_' . $lang];
                        }
                        ?><br>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="features2 cid-ty0ImDw2on" id="afeatures12-7t">
    <div class="container">
        <div class="row">
            <?php
            if (!empty($about_info)) {
                foreach ($about_info as $info) { ?>
                    <div class="col-12 col-xl-3 col-sm-6 col-card">
                        <div class="card-wrapper card-1">
                            <div class="card-box align-left">
                                <h4 class="card-title mbr-fonts-style align-left display-1">
                                    <strong><?= $info['number']; ?>+</strong>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    <?= $info['title_' . $lang]; ?>
                                </p>
                            </div>
                        </div>
                    </div>
            <? }
            }
            ?>
        </div>
    </div>
</section>

<!-- why us section -->
<?= $this->render('../components/why_exactly_us') ?>
<!-- /.why us section -->

<!-- why us section -->
<?= $this->render('../components/certificate') ?>
<!-- /.why us section -->


<!-- gallery -->
<?= $this->render('../components/gallery') ?>
<!-- /.gallery -->