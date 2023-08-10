<?php
// here wariables 
$building_soutions = Yii::$app->view->params['building_soutions'];
$lang = Yii::$app->language;
?>
<section data-bs-version="5.1" class="gallery1 cid-tv5COpvbRU" id="gallery1-3h">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong><?= Yii::t('common', 'Решения для любых типов помещений') ?></strong>
                <strong>
                    <br>
                </strong>
                <strong>
                    <br>
                </strong>
            </h4>
        </div>
        <div class="row mt-4">
            <?php
            if (!empty($building_soutions)) {
                foreach ($building_soutions as $solutions) {
            ?>
                    <div class="item features-image сol-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?=$solutions['header_image']?>" loading="lazy" class="lazyload" data-src="<?= Yii::getAlias('@web') . '/web/' . $solutions['header_image'] ?>">
                            </div>
                            <div class="item-content">
                                <p class="mbr-text mbr-fonts-style mt-3 display-7"><strong>
                                        <?= $solutions['title_' . $lang] ?>
                                        &nbsp;</strong><br></p>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2"><a href="<?= yii\helpers\Url::to(['premises-show', 'id' => $solutions->id]) ?>" class="btn btn-primary item-btn display-4"><?= Yii::t('common', 'Подробнее') ?></a></div>
                        </div>
                    </div>
            <?
                }
            } ?>

            <!-- <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" class="lazyload" data-src="/resources/images/icons-8-848x595.jpg">
                    </div>
                    <div class="item-content">
                        <p class="mbr-text mbr-fonts-style mt-3 display-7"><strong>Фальшпол для офисных и жилых
                                помещений&nbsp;</strong><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="page14.html#header11-84" class="btn btn-primary item-btn display-4"><?= Yii::t('common', 'Подробнее') ?></a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" class="lazyload" data-src="/resources/images/icons-12-848x595.jpg">
                    </div>
                    <div class="item-content">
                        <p class="mbr-text mbr-fonts-style mt-3 display-7"><strong>Фальшпол в промышленных
                            </strong><br><strong>объектах&nbsp;</strong><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="page15.html#header11-8c" class="btn btn-primary item-btn display-4"><?= Yii::t('common', 'Подробнее') ?></a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-slide-to="3" data-bs-slide-to="4" loading="lazy" class="lazyload" data-src="/resources/images/icons-9-848x595.jpg">
                    </div>
                    <div class="item-content">
                        <p class="mbr-text mbr-fonts-style mt-3 display-7"><strong>Фальшпол в сфере
                            </strong><br><strong>здравоохранения&nbsp;</strong><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="page17.html#header11-8s" class="btn btn-primary item-btn display-4"><?= Yii::t('common', 'Подробнее') ?></a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-slide-to="4" data-bs-slide-to="5" loading="lazy" class="lazyload" data-src="/resources/images/icons-10-848x595.jpg">
                    </div>
                    <div class="item-content">
                        <p class="mbr-text mbr-fonts-style mt-3 display-7"><strong>Фальшпол в сфере
                            </strong><br><strong>торговли и индустрии&nbsp;</strong><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="page18.html#header11-91" class="btn btn-primary item-btn display-4"><?= Yii::t('common', 'Подробнее') ?></a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-slide-to="5" data-bs-slide-to="6" loading="lazy" class="lazyload" data-src="/resources/images/icons-11-848x595.jpg">
                    </div>
                    <div class="item-content">
                        <p class="mbr-text mbr-fonts-style mt-3 display-7"><strong>Фальшпол для
                            </strong><br><strong>серверных</strong><br></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="page16.html#header11-8k" class="btn btn-primary item-btn display-4"><?= Yii::t('common', 'Подробнее') ?></a></div>
                </div>
            </div> -->
        </div>
    </div>
</section>