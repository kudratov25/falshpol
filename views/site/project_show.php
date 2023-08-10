<?php

/** @var yii\web\View $this */

use app\components\ApplicationWidget;
use yii\helpers\Html;

$lang = Yii::$app->language;
$this->title = $project['title_' . $lang];
$this->params['breadcrumbs'][] = $this->title;
?>

<section data-bs-version="5.1" class="header11 cid-tynYGX71w4" id="header11-a3">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $project['image'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            <?php
                            if (!empty($project)) {
                                echo ($project['title_' . $lang]);
                            }
                            ?>
                        </strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <strong>
                            <?= Yii::t('common', 'Главная ➤ Проекты') ?>&nbsp;➤
                            <?php if (!empty($project)) {
                                echo $project['title_' . $lang];
                            } ?>
                        </strong>
                        <br><br>
                        <?php
                        if (!empty($project)) {
                            echo $project['text_' . $lang];
                        }
                        ?>
                        <br>
                    </p>
                    <div class="mbr-section-btn mt-3">
                        <?= Html::button(Yii::t('common', 'Заказать фальшпол'), ['class' => 'btn btn-secondary display-7 rounded-circle', 'id' => 'form01-7x']); ?>
                    </div>
                    <!-- <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-7" href="page19.html#form01-a4"><?= Yii::t('common', 'Заказать фальшпол') ?></a></div> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- =============== proyektlar galareya qismi ===============-->

<?php
if (!empty($galleryImages)) {
?>

    <section data-bs-version="5.1" class="gallery6 mbr-gallery cid-tynZJkBCi6" id="gallery6-aa">
        <div class="container">
            <div class="row mbr-gallery mt-4">

                <?php foreach ($galleryImages as $key => $image) { ?>
                    <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                        <div class="item-wrapper" data-bs-toggle="modal" data-bs-target="#tBiuRGM3nf-modal" onclick="showModalImage(<?= $key ?>)">
                            <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-slide-to="<?= $key ?>" data-bs-slide-to="<?= $key ?>" data-target="#lb-tBiuRGM3nf" data-bs-target="#lb-tBiuRGM3nf" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $image['image'] ?>">
                            <div class="icon-wrapper">
                                <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>


            <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="tBiuRGM3nf-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel slide" id="lb-tBiuRGM3nf" data-interval="5000" data-bs-interval="5000">
                                <div class="carousel-inner">

                                    <?php foreach ($galleryImages as $key => $image) : ?>
                                        <div class="carousel-item <?php if ($key === 0) echo 'active'; ?>" id="carousel-item-<?php echo $key; ?>">
                                            <img class="d-block w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $image['image'] ?>">
                                        </div>
                                    <?php endforeach; ?>

                                    <script>
                                        function showModalImage(index) {
                                            const modalImages = document.querySelectorAll('.carousel-item');
                                            modalImages.forEach((image, i) => {
                                                if (i === index) {
                                                    image.classList.add('active');
                                                } else {
                                                    image.classList.remove('active');
                                                }
                                            });

                                            const carouselElement = document.querySelector('#tBiuRGM3nf-modal .carousel');
                                            const carouselInstance = bootstrap.Carousel.getInstance(carouselElement);
                                            carouselInstance.to(index);
                                        }
                                    </script>

                                </div>
                                <ol class="carousel-indicators">
                                    <?php foreach ($galleryImages as $key => $image) { ?>
                                        <li data-slide-to="<?= $key ?>" data-bs-slide-to="<?= $key ?>" <?= $key === 0 ? 'class="active"' : '' ?> data-target="#lb-tBiuRGM3nf" data-bs-target="#lb-tBiuRGM3nf"></li>
                                    <?php } ?>
                                </ol>

                                <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                                </a>
                                <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-tBiuRGM3nf">
                                    <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                    <span class="sr-only visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-tBiuRGM3nf">
                                    <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                    <span class="sr-only visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?
} ?>

<?php
echo ApplicationWidget::widget([]);
?>