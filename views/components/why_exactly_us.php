<?php
// here wariables 
$home_why_us = Yii::$app->view->params['home_why_us'];
$lang = Yii::$app->language;
$a = 1;
?>
<section data-bs-version="5.1" class="features4 cid-tvJYkNih0p" id="afeatures4-4a">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-5 col-lg-6 col-md-7 col-text">
                <div class="text-wrapper">
                    <h1 class="mbr-section-title mbr-fonts-style display-2"><strong><?= Yii::t('common', 'Почему именно мы?') ?></strong></h1>
                    <div class="cards-container">

                        <?php
                        foreach ($home_why_us as $items) {
                        ?>
                            <div class="card card-1">
                                <div class="card-number">
                                    <?php echo $a++ ?>
                                </div>
                                <div class="card-text-container">
                                    <h2 class="card-title mbr-fonts-style display-5">
                                        <strong><?= $items['title_' . $lang] ?></strong>
                                    </h2>
                                    <p class="card-text mbr-fonts-style display-7"><?= $items['text_' . $lang] ?>
                                    </p>
                                </div>
                            </div>
                        <?
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 image-wrapper">
                <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . end($home_why_us)['image'] ?>">
            </div>
            <div class="bg-round">
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="auto" width="905" height="1249" viewBox="0 0 905 1249" fill="none">
                    <rect x="-216" y="838.195" width="1276.24" height="1112.27" rx="556.137" transform="rotate(-55.6916 -216 838.195)" fill="url(#paint0_linear_450_257)"></rect>
                    <defs>
                        <linearGradient id="paint0_linear_450_257" x1="-146.379" y1="1457.32" x2="988.211" y2="1457.31" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F6FDFF"></stop>
                            <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</section>