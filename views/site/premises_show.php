<?php

/** @var yii\web\View $this */

use app\components\ApplicationWidget;
use yii\helpers\Html;
use yii\helpers\Url;

$lang = Yii::$app->language;
$this->title = $building_solution['title_' . $lang];
$this->params['breadcrumbs'][] = $this->title;
?>

<section data-bs-version="5.1" class="header11 cid-ty63bhTlOW" id="header11-7v">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $building_solution['image_1'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong><?= $building_solution['title_' . $lang] ?></strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7"><strong>
                            <?= Yii::t('common', 'Главная') ?>&nbsp; ➤ <?= $building_solution['title_' . $lang] ?>&nbsp;</strong><br><br>
                        <?= $building_solution['text1_' . $lang] ?><br></p>
                    <div class="mbr-section-btn mt-3">
                        <?= Html::button(Yii::t('common', 'Заказать фальшпол'), ['class' => 'btn btn-secondary display-7 rounded-circle', 'id' => 'form01-7x']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="header11 cid-ty65v9a1S6" id="header11-81">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100 lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" loading="lazy" data-src="<?= Yii::getAlias('@web') . '/web/' . $building_solution['image_2'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">

                    <p class="mbr-text mbr-fonts-style display-7">
                        <?= $building_solution['text2_' . $lang] ?><br></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="article2 cid-ty65RBtxh4" id="aarticle2-82">
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style align-center display-7"> <?= $building_solution['text3_' . $lang] ?><br></p>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- second form as widget -->
<?= ApplicationWidget::widget([]) ?>
<!-- /.form end -->