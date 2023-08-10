<?php
// here wariables 
$home_clients = Yii::$app->view->params['home_clients'];
$lang = Yii::$app->language;
?>
<section data-bs-version="5.1" class="gallery1 cid-tybWiH1uKi" id="gallery1-99">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong><?= Yii::t('common', 'Наши клиенты') ?></strong>
            </h4>
        </div>
        <div class="row mt-4">
            <?php
            foreach ($home_clients as $client) {
            ?>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?= $client['title_' . $lang] ?>" loading="lazy" class="lazyload" data-src="<?= Yii::getAlias('@web') . '/web/' . $client['image'] ?>">
                        </div>
                    </div>
                </div>
            <?
            }
            ?>
        </div>
    </div>
</section>