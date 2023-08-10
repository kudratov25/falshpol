<?php

/** @var yii\web\View $this */

use app\components\ApplicationWidget;
use yii\helpers\Html;

$lang = Yii::$app->language;
$this->title = Yii::t('app','Монтаж');
$this->params['breadcrumbs'][] = $this->title;
?>

<section data-bs-version="5.1" class="video5 cid-tyc81ACyX9" id="video5-9u">

    <div class="container">




        <div>
            <div class="title-wrapper mb-5">
                <h4 class="mbr-section-title mbr-fonts-style mb-0 display-1"><strong><?= Yii::t('common', 'Продажа и монтаж фальшпола') ?></strong>
                </h4>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 video-block">
                    <div class="video-wrapper">
                        <?php
                        if (!empty($montage_header)) {
                            echo $montage_header['youtube_link'];
                        }
                        ?>
                        <!-- <iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/ase1QCdlddY?rel=0&amp;amp;mute=1&amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen=""></iframe> -->
                    </div>

                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h3 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                            <strong><?= Yii::t('common', 'Главная ➤ Монтаж') ?></strong>
                        </h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php
                            if (!empty($montage_header)) {
                                echo $montage_header['text_' . $lang];
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section data-bs-version="5.1" class="list2 cid-tvOdCFLnzf" id="alist2-5p">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 lists-col">
                <?php
                if (!empty($montage_info)) {
                    foreach ($montage_info as $montage_info_item) {
                ?>
                        <div class="col-list">
                            <p class="list-title mbr-fonts-style display-5"><strong><?= $montage_info_item['title_' . $lang]; ?></strong><br></p>
                            <ul class="list mbr-fonts-style display-7">
                                <li>
                                    <?= $montage_info_item['text_' . $lang] ?>
                                </li>
                            </ul>
                        </div>

                <?
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>


<!-- second form as widget -->
<?= ApplicationWidget::widget([]) ?>
<!-- /.form end -->