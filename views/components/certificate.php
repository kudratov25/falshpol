<?php
// here wariables 
$home_certificates = Yii::$app->view->params['home_certificates'];
$lang = Yii::$app->language;
?>
<section data-bs-version="5.1" class="slider6 mbr-embla cid-ty0EX2ykvp" id="slider6-7q">
    <div class="position-relative">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong><?php echo Yii::t('common', 'Сертификаты')?></strong>
            </h4>
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true" data-auto-play-interval="3" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    <?php
                    foreach ($home_certificates as $certificate) {
                        $imageSrc = Yii::getAlias('@web') . '/web/' . $certificate['image'];
                    ?>
                        <div class="embla__slide slider-image item" style="margin-left: 10rem; margin-right: 10rem;">
                            <div class="slide-content">
                                <div class="item-wrapper">
                                    <div class="item-img">
                                        <img src="<?= $imageSrc ?>" alt="<?= $certificate['title_' . $lang] ?>" title="" class="lazyload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="gallery2 cid-tEIgfpLmjQ" id="gallery2-bm">