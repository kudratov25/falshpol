<?php

/** @var yii\web\View $this */

use app\components\ApplicationWidget;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Типы фальшпола');
$this->params['breadcrumbs'][] = $this->title;
$lang = Yii::$app->language;
?>


<section data-bs-version="5.1" class="header6 cid-tvKoAtahPe" id="header6-4g">

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-2">
                    <strong>
                        <?= Yii::t('common', 'Фальшполы по доступным ценам!') ?>
                    </strong>
                </h1>

                <p class="mbr-text mbr-white mbr-fonts-style display-7">
                    <?= Yii::t('common', 'Главная ➤ Типы фальшпола') ?>
                </p>

            </div>
        </div>
    </div>
</section>




<section data-bs-version="5.1" class="gallery3 cid-tuNKJhahlQ" id="gallery3-1t">

    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong><?= Yii::t('common', 'Плиты фальшпола') ?></strong>
            </h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">
                <?= Yii::t('common', 'Мы наработали опыт в производстве различных типов плит фальшпола') ?>
            </h5>
        </div>
        <div class="row mt-4">
            <?php if (!empty($falshpol_type_show)) {
                foreach ($falshpol_type_show as $flashpols) { ?>
                    <div class="item features-image сol-12 col-md-6 col-lg-4 active">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-slide-to="0" data-bs-slide-to="0" loading="lazy" class="lazyload" data-src="<?= Yii::getAlias('@web') . '/web/' . $flashpols['header_image'] ?>">
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-5">
                                    <strong><?= $flashpols['title_' . $lang]; ?></strong>
                                </h5>
                                <h6 class="item-subtitle mbr-fonts-style mt-1 display-7">
                                    <em><?= $flashpols['head_title_' . $lang]; ?></em>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mt-3 display-7">
                                    <?= $flashpols['head_text_' . $lang]; ?>
                                    <br>
                                </p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="<?= yii\helpers\Url::to(['falshpol-type-show', 'id' => $flashpols->id]) ?>" class="btn btn-primary item-btn display-4"><?= Yii::t('common', 'Подробнее') ?></a></div>
                        </div>
                    </div>
            <?    }
            } ?>
        </div>
    </div>
</section>
<!-- ============================================================== -->


<section data-bs-version="5.1" class="header2 personam4_header2 cid-tybZGm0wlM" id="header02-9f">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-semibold pb-3 mbr-fonts-style display-2">
                    <strong><?= Yii::t('common', 'Типы фальшпола') ?></strong>
                </h1>
            </div>
        </div>
    </div>
</section>



<section data-bs-version="5.1" class="header11 cid-tybZp7r5Mp" id="header11-9e">
    <?php
    if (!empty($type_falshpol_text)) {
    ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 image-wrapper">
                    <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $type_falshpol_text['image1'] ?>">
                </div>
                <div class="col-12 col-md">
                    <div class="text-wrapper text-center">
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                            <strong><?= Yii::t('common', 'Фальшполы различают:') ?></strong>
                        </h1>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?= $type_falshpol_text['text1_' . $lang] ?>
                            <?= $type_falshpol_text['text2_' . $lang] ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    <?   }
    ?>
</section>

<section data-bs-version="5.1" class="header11 cid-tyc0XMD0u6" id="header11-9g">
    <?php
    if (!empty($type_falshpol_text)) {
    ?>



        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 image-wrapper">
                    <img class="w-100 lazyload" src="<?= Yii::getAlias('@web') . '/web/' . $type_falshpol_text['image2'] ?>" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $type_falshpol_text['image2'] ?>">
                </div>
                <div class="col-12 col-md">
                    <div class="text-wrapper text-center">

                        <p class="mbr-text mbr-fonts-style display-7">
                            <?= $type_falshpol_text['text3_' . $lang] ?>
                            <?= $type_falshpol_text['text4_' . $lang] ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>

    <?
    } ?>
</section>

<!-- Решения для любых типов помещений -->
<?= $this->render('../components/all_type_solution') ?>
<!-- /.Решения для любых типов помещений -->


<!-- second form as widget -->
<?= ApplicationWidget::widget([]) ?>
<!-- /.form end -->