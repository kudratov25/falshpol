<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Url;
use yii\helpers\Html;


// variables
/*
*
*
*/

$home_partners = Yii::$app->view->params['home_partners'];
$social_link = Yii::$app->view->params['social_link'];
$catalogs = Yii::$app->view->params['catalogs'];
$premises = Yii::$app->view->params['premises'];
$lang = Yii::$app->language;


// end of wariables 


AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/resources/images/falshpol-logo-5-265x96.png')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <section data-bs-version="5.1" class="menu menu1 cid-sXT21XmgXk" once="menu" id="amenu1-1">
        <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="<?= yii\helpers\Url::home() ?>"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" style="height: 3rem;" loading="lazy" class="lazyload" data-src="/resources/images/falshpol-logo-5-265x96.png"></a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?= yii\helpers\Url::home() ?>"><?= Yii::t('common', 'Главная') ?></a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?= yii\helpers\Url::to(['site/about']) ?>"><?= Yii::t('common', 'О нас') ?></a></li>
                        <li class="nav-item dropdown"><a class="nav-link link text-black text-primary dropdown-toggle display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside"><?= Yii::t('common', 'Каталог') ?> </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-790">
                                <?php
                                foreach ($catalogs as $catalog) {
                                    echo Html::a($catalog['title'], Url::to(['falshpol-type-show', 'id' => $catalog['id']]), ['class' => 'text-black text-primary show dropdown-item display-4']);
                                }
                                ?>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?= yii\helpers\Url::to(['site/typefalshpol']) ?>" aria-expanded="false"><?= Yii::t('common', 'Типы фальшпола') ?></a>
                        </li>

                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?= yii\helpers\Url::to(['site/montage']) ?>"><?= Yii::t('common', 'Монтаж') ?></a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?= yii\helpers\Url::to(['site/projects']) ?>"><?= Yii::t('common', 'Проекты') ?></a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="#map2-48"><?= Yii::t('common', 'Контакты') ?></a></li>
                    </ul>
                    <div class="mbr-section-btn">
                        <a class="btn btn-secondary display-4" href="tel:<?= $social_link['phone_number'] ?>"><?= $social_link['phone_number'] ?></a>
                    </div>



                    <style>
                        .tel-menu {
                            display: flex;
                            justify-content: center;
                        }

                        .image-container {
                            display: flex;
                            align-items: center;

                        }

                        .lang_img {
                            margin-right: 5px;
                            /* Add margin to create space between images */
                        }
                    </style>

                    <div class="tel-menu">
                        <div class="image-container">
                            <?php
                            if (Yii::$app->language !== 'uz') {
                                echo Html::a(
                                    Html::img('/web/resources/images/uzb.jpg', ['class' => 'lang_img flag']),
                                    array_merge(Yii::$app->request->get(), [Yii::$app->controller->route, 'language' => 'uz'])
                                );
                            }
                            if (Yii::$app->language !== 'en') {
                                echo Html::a(
                                    Html::img('/web/resources/images/usa.jpg', ['class' => 'lang_img flag']),
                                    array_merge(Yii::$app->request->get(), [Yii::$app->controller->route, 'language' => 'en'])
                                );
                            }
                            if (Yii::$app->language !== 'ru') {
                                echo Html::a(
                                    Html::img('/web/resources/images/russia.jpg', ['class' => 'lang_img flag']),
                                    array_merge(Yii::$app->request->get(), [Yii::$app->controller->route, 'language' => 'ru'])
                                );
                            }
                            ?>
                        </div>
                    </div>


                </div>
            </div>
        </nav>
    </section>

    <?= $content ?>


    <section data-bs-version="5.1" class="gallery2 cid-tEIgfpLmjQ" id="gallery2-bm">


        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-1"><strong><?= Yii::t('common', 'Производители фальшпола') ?></strong></h4>
                <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5"><?= Yii::t('common', 'Мы работаем только с проверенными производителями, продукция которых подтверждена сертификатами соответствия. Вы можете быть уверены в качестве предлагаемого нами фальшпола и сопутствующих материалов.') ?><br></h4>
            </div>
            <div class="row mt-4">
                <?php foreach ($home_partners as $partners) {
                ?>

                    <div class="item features-image сol-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="item-img">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?= $partners['title_' . $lang] ?>" loading="lazy" class="lazyload" data-src="<?= Yii::getAlias('@web') . '/web/' . $partners['image'] ?>">
                                <!-- <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" class="lazyload" data-src="resources/images/clients-4-453x257.jpg"> -->
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>

    <!-- google map section -->
    <?= $this->render('../components/map') ?>
    <!-- /.google map section -->

    <section data-bs-version="5.1" class="footer1 expertm5 cid-tuMgeJFFu0" once="footers" id="afooter1-z">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="item-wrap">
                        <div class="navbar-brand">
                            <span class="navbar-logo">
                                <a href="<?= yii\helpers\Url::home() ?>">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" style="height: 4.2rem;" loading="lazy" class="lazyload" data-src="/resources/images/falshpol-logo-3-424x134.png">
                                </a>
                            </span>
                        </div>
                        <div class="social-list">

                            <style>
                                .soc-item>a {
                                    z-index: 10;
                                }
                            </style>

                            <div class="soc-item">
                                <a href="<?= $social_link['telegram'] ?>"><span class="mbr-iconfont mbr-iconfont-social socicon-telegram socicon"></span></a>
                            </div>
                            <div class="soc-item">
                                <a href="<?= $social_link['facebook'] ?>"><span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span></a>
                            </div>
                            <div class="soc-item">
                                <a href="<?= $social_link['instagram'] ?>"><span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-links">
                    <div class="item-wrap">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-4">► <a href="<?= yii\helpers\Url::home() ?>" class="text-white"><?= Yii::t('common', 'Главная') ?></a>
                        </h5>
                        <ul class="list mbr-fonts-style display-4">
                            <li class="mbr-text item-wrap text-start">► <a href="<?= yii\helpers\Url::to(['site/about']) ?>" class="text-white text-primary"><?= Yii::t('common', 'О нас') ?></a></li>
                            <li class="mbr-text item-wrap text-start">► <a href="<?= yii\helpers\Url::to(['site/typefalshpol']) ?>" class="text-white text-primary"><?= Yii::t('common', 'Типы фальшпола') ?></a></li>
                            <li class="mbr-text item-wrap text-start">► <a href="<?= yii\helpers\Url::to(['site/typefalshpol']) ?>" class="text-primary"><?= Yii::t('common', 'Каталог') ?></a></li>
                            <li class="mbr-text item-wrap text-start">► <a href="<?= yii\helpers\Url::to(['site/montage']) ?>" class="text-primary"><?= Yii::t('common', 'Монтаж') ?></a></li>
                            <li class="mbr-text item-wrap text-start">► <a href="<?= yii\helpers\Url::to(['site/projects']) ?>" class="text-primary"><?= Yii::t('common', 'Проекты') ?></a></li>
                            <li class="mbr-text item-wrap text-start">► <a href="#map2-48" class="text-primary"><?= Yii::t('common', 'Контакты') ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-links">
                    <div class="item-wrap">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-4"><strong>
                                <?= Yii::t('common', 'Каталог') ?></strong></h5>
                        <ul class="list mbr-fonts-style display-4">
                            <?php
                            foreach ($catalogs as $catalog) { ?>

                                <li class="mbr-text item-wrap text-start">►
                                    <?php
                                    echo Html::a($catalog['title'], Url::to(['falshpol-type-show', 'id' => $catalog['id']]), ['class' => 'text-primary']);
                                    ?>
                                </li>

                            <? } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-links">
                    <div class="item-wrap">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-4"><strong><?= Yii::t('common', 'Фальшпол для') ?>&nbsp;</strong>
                        </h5>
                        <ul class="list mbr-fonts-style display-4">
                            <?php
                            foreach ($premises as $premise) { ?>

                                <li class="mbr-text item-wrap text-start">►
                                    <?php
                                    echo Html::a($premise['title'], Url::to(['premises-show', 'id' => $premise['id']]), ['class' => 'text-primary']);
                                    ?>
                                </li>

                            <? } ?>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-12 col-copyright">
                    <div class="border-item"></div>
                    <p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-7">FALSHPOL SOLUTIONS<br></p>
                </div>
            </div>
        </div>
    </section>

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">

    <script>
        "use strict";
        if ("loading" in HTMLImageElement.prototype) {
            document.querySelectorAll('img[loading="lazy"],iframe[loading="lazy"]').forEach(e => {
                e.src = e.dataset.src, e.setAttribute("data-temp-style", e.getAttribute("style")), e.style.paddingTop = 100 * e.getAttribute("data-aspectratio") + "%", e.style.height = 0, e.onload = function() {
                    if (e.getAttribute("data-temp-style") !== "null") {
                        e.setAttribute("style", e.getAttribute("data-temp-style"))
                    } else {
                        e.removeAttribute("style")
                    };
                    e.removeAttribute("data-temp-style")
                }
            })
        } else {
            const e = document.createElement("script");
            e.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js", document.body.appendChild(e)
        }
    </script>
    <?php
    $this->registerJs("
$('#form01-7x').click(function() {
    $('html, body').animate({
        scrollTop: $('#form01-6i').offset().top
    }, 100);
});
");
    ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>