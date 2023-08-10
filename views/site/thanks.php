<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title =  Yii::t('app', 'Спасибо. Заявка принята!') ;
$this->params['breadcrumbs'][] = $this->title;
?>

<section data-bs-version="5.1" class="header6 cid-tBij3EYoRy mbr-fullscreen" id="header6-bd">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>
                        <?php echo Yii::t('app', 'Спасибо. Заявка принята!') ?>
                    </strong></h1>

                <p class="mbr-text mbr-white mbr-fonts-style display-7">
                    <?php echo Yii::t('app', 'Наш менеджер свяжется с вами в ближайшее время.') ?>
                </p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="<?= yii\helpers\Url::home() ?>"><?php echo Yii::t('app', 'Вернуться на главную') ?></a></div>
            </div>
        </div>
    </div>
</section>