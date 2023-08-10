<?php
// here wariables 
$social_link = Yii::$app->view->params['social_link'];
?>

<section data-bs-version="5.1" class="map2 cid-tvJHNDgDtH" id="map2-48">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="google-map">
                <!-- <iframe frameborder="0" style="border:0" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" allowfullscreen="" loading="lazy" class="lazyload" data-src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=41.326626, 69.211526"></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d749.0446217710781!2d69.211562!3d41.326732!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE5JzM1LjkiTiA2OcKwMTInNDEuNSJF!5e0!3m2!1suz!2sus!4v1682444348412!5m2!1suz!2sus" width="600" height="450" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="custom-row">
                <div class="col-12 col-md-6 map-col"></div>
                <div class="col-12 col-md-6 col-text">
                    <div class="text-wrapper">
                        <div class="text-container">
                            <h2 class="mbr-section-title mbr-fonts-style display-5"><strong><?= Yii::t('common', 'Будем рады сотрудничать с Вами') ?></strong></h2>
                        </div>
                        <div class="cards-container">
                            <h2 class="cards-title mbr-fonts-style display-5">
                                <strong><?= Yii::t('common', 'Контакты') ?></strong>
                            </h2>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="tel:<?php echo $social_link['phone_number'] ?>" class="text-black"><?php echo $social_link['phone_number'] ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont mobi-mbri-map-pin mobi-mbri" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <?= $social_link['address'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <?= $social_link['email'] ?>
                                    </p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont socicon-telegram socicon" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="<?= $social_link['telegram'] ?>" class="text-secondary text-primary">Telegram</a>
                                    </p>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont socicon-instagram socicon" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="<?= $social_link['instagram'] ?>" class="text-secondary text-primary">Instagram</a>
                                    </p>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont socicon-facebook socicon" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="<?= $social_link['facebook'] ?>" class="text-secondary text-primary">Facebook</a>
                                    </p>
                                </div>
                            </div>


                        </div>
                        <div class="btn-container">
                        </div>
                    </div>
                    <svg class="radial-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 239" preserveAspectRatio="xMidYMid slice">
                        <path xmlns="http://www.w3.org/2000/svg" d="M0 0H59C35.7061 95.0071 34.4159 147.624 59 239H0V0Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>