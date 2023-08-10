<?php

/** @var yii\web\View $this */

use app\components\ApplicationWidget;
use yii\helpers\Html;

$lang = Yii::$app->language;
if (!empty($falshpol_type_show)) {
    $this->title =  $falshpol_type_show['title_' . $lang];
} else {
    $this->title = Yii::t('common', 'Фальшпол из');
}
$this->params['breadcrumbs'][] = $this->title;
?>


<section data-bs-version="5.1" class="header11 cid-tvOsZWTM7M" id="header11-5t">




    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(255, 255, 255);"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?= $falshpol_type_show['title_' . $lang] ?>" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $falshpol_type_show['image'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1">
                        <strong><?= Yii::t('common', 'Фальшпол из') ?>
                            <?php
                            if (!empty($falshpol_type_show)) {
                                echo $falshpol_type_show['title_' . $lang];
                            }
                            ?>
                        </strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <strong>
                            <?= Yii::t('common', 'Главная ➤&nbsp;Типы фальшпола&nbsp;➤') ?>
                            <?php if (!empty($falshpol_type_show)) {
                                echo $falshpol_type_show['title_' . $lang];
                            } ?>
                        </strong>
                        <br><br>
                        <?php if (!empty($falshpol_type_show)) {
                            echo $falshpol_type_show['text_' . $lang];
                        } ?>
                        <br>
                    </p>
                    <div class="mbr-section-btn mt-3">
                        <?= Html::button(Yii::t('common', 'Заказать фальшпол'), ['class' => 'btn btn-secondary display-7 rounded-circle', 'id' => 'form01-7x']); ?>
                    </div>
                    <!-- <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-7" href="page5.html#form01-5x"><?= Yii::t('common', 'Заказать фальшпол') ?></a></div> -->
                </div>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="list2 cid-tvOxsQP06C" id="alist2-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 title-col">
                <h5 class="mbr-section-title mbr-fonts-style mb-0 display-2"><strong><?//= Yii::t('common', 'Особенности материала') ?></strong>
                </h5>
            </div>
            <div class="col-12 lists-col">
                <div class="col-list">
                    <?php
                    if (!empty($falshpol_type_show)) {
                        echo $falshpol_type_show['full_text_' . $lang];
                    }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- second form as widget -->
<?= ApplicationWidget::widget([]) ?>
<!-- /.form end -->

