<?php

/** @var yii\web\View $this */

use yii\captcha\Captcha;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

$this->title = 'Falshpol';
$lang = Yii::$app->language;
?>

<section data-bs-version="5.1" class="header11 cid-tv5oBvC3gs mbr-parallax-background" id="header11-35">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $home_header['image'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong><?= $home_header['title_' . $lang] ?></strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7"><?= $home_header['text_' . $lang] ?></strong></p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-success display-4" href="#form1-3s"><?= Yii::t('common', 'Расчет фальшполов') ?>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="header14 cid-tECSMMNpX3 mbr-fullscreen" id="header14-be">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" class="lazyload" data-src="<?= Yii::getAlias('@web') . '/web/' . $home_about_us['image'] ?>">

                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" class="lazyload" data-src="assets/images/230-848x572.jpg">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong><?= Yii::t('common', 'О нас') ?></strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?= $home_about_us['text_' . $lang] ?>
                        <br>
                    </p>
                    <div class="mbr-section-btn mt-4"><a class="btn btn-lg btn-success display-4" href="<?= yii\helpers\Url::to(['site/about']) ?>"><?= Yii::t('common', 'Подробнее') ?></a></div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Решения для любых типов помещений -->
<?= $this->render('../components/all_type_solution') ?>
<!-- /.Решения для любых типов помещений -->

<!-- Navbar -->
<?= $this->render('../components/why_exactly_us') ?>
<!-- /.navbar -->
<section data-bs-version="5.1" class="inspirem5 header3 cid-tvPhe1nRsm" id="header03-6g" style="background-color: #ffffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1" style="color: #000000 !important;"><strong><?= Yii::t('common', 'Приимущество фальшполов') ?></strong></h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-2" style="color: #000000 !important;"><?= $home_benefits['title_' . $lang] ?></h2>
                <p class="mbr-text mbr-fonts-style display-7" style="color: #000000 !important;">
                    <?= Yii::t('common', 'Технико-экономическое обоснование <br>Вес кв. метра цементно-песчаной стяжки 15 - 17 кг/м2 при толщине 10 мм, что при толщине 100 мм – 150 -170 кг/м2, что уже 30% от проектной нагрузки, <br>Система же фальшполов весит: 30-35 кг/m2 при высотах (110-300 мм)') ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header11 cid-tvPhuKdqKy" id="header11-6h" style="background-color: #ffffff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 image-wrapper">
                <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $home_benefits['image'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-start">
                    <p class="mbr-text mbr-fonts-style display-7" style="color: #000000 !important;">
                        <?= $home_benefits['text_' . $lang] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="extContent cid-tynbThytby" id="extContent20-9w">

    <div class="container">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style mbr-bold display-2"><?= Yii::t('common', 'Реализованные проекты') ?></h2>
        <div class="row">
            <?php
            foreach ($home_completed_projects as $project) { ?>
                <div class="col-md-4">
                    <label class="container2">
                        <p class="mbr-text mbr-fonts-style display-7"><?= $project['title_' . $lang] ?>
                        </p>
                        <input type="checkbox" checked="" hidden>
                        <span class="checkmark"></span>
                    </label>
                    <br>
                </div>
            <?
            }
            ?>
        </div>
    </div>
</section>

<!-- gallery -->
<?= $this->render('../components/gallery') ?>
<!-- /.gallery -->




<section data-bs-version="5.1" class="form1 hotelm4_form1 cid-tv9YziAEgY" id="form1-3s">
    <div class="container">
        <div class="row main-row justify-content-center">
            <div class="col-md-9 col-lg-6">
                <div class="form1">

                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-12">
                            <h3 class="mbr-fonts-style mbr-section-subtitle form-subtitle mbr-fonts-style align-center mbr-white display-5">
                                <strong><?= Yii::t('common', 'Оставьте свои контакты и получите бесплатную консультацию') ?></strong>
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <h2 class="mbr-fonts-style mbr-section-title form-title mbr-fonts-style align-center mbr-white pb-5 display-7"><?= Yii::t('common', 'Детальный расчет стоимости по вашему проекту.') ?></h2>
                        </div>
                        <div data-for="name" class="col-md-12 form-group mb-3 ">
                            <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => Yii::t('common', 'Как вас зовут')])->label(false) ?>
                        </div>
                        <div data-for="phone" class="col-md-12 form-group mb-3 ">
                            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => false])->widget(MaskedInput::class, ['mask' => '+\9\9\8 (99) 999 99 99'])->label(false); ?>
                        </div>


                        <!-- <div data-for="phone" class="col-md-12 form-group mb-3 "> -->
                        <? //= $form->field($model, 'verifyCode')->widget(Captcha::class, ['template' => '<div class="row"><div class="col-lg-6">{input}</div><div class="col-lg-3">{image}</div></div>']) 
                        ?>
                        <!-- </div> -->


                        <div class="col-md-12 input-group-btn"><button type="submit" class="submit btn btn-lg btn-form btn-success display-7"><?= Yii::t('common', 'Оставить заявку') ?></button></div>
                    </div>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>
            <div class="col-md-9 media-container-column items-column col-lg-6">
                <div class="row first-row only-first-row">
                    <div class="card col-12">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" class="lazyload" data-src="/resources/images/catalog5c62744fdf0f1-max-1248x1341.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- certificate -->
<?= $this->render('../components/certificate'); ?>
<!-- /.certificate -->