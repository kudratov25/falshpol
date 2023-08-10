<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput;
?>
<section data-bs-version="5.1" class="mbr-section form1 cid-tvPjXhKTSw" id="form01-6i">
    <div class="container">
        <div class="session">

        </div>
        <div class="row align-left">
            <div class="col-md-12 col-lg-5 ps-1 my-auto ps-md-3 md-pb">
                <div class="text-block m-auto">
                    <h2 class="mb-4 mbr-fonts-style mbr-section-title display-2"> <?= Yii::t('common', 'В течение 1 дня <div><strong>Сделаем расчет</strong></div>') ?>
                    </h2>
                    <h3 class="mbr-section-subtitle mbr-fonts-style mb-4 display-7">
                        <?= Yii::t('common', 'Расчет спецификации и/или расчет по проекту помещения. <div>Подберем материал с учетом бюджета и требуемых характеристик.</div>') ?>
                    </h3>
                    <p class="mb-4 text mbr-fonts-style display-7">
                        <?= Yii::t('common', 'Свяжитесь с нами любым удобным способом!<br>Позвоните нам по бесплатному номеру или напишите на почту. <br>Все расскажем, объясним и ответим на любые вопросы.') ?>
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 block-content pe-md-3">
                <div class="form-block">
                    <div class="bg"></div>
                    <div class="form-wrap">
                        <!--Formbuilder Form-->
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="row">
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-12">
                                <h4 class="mbr-fonts-style mb-2 mbr-fonts-style display-5">
                                    <strong>
                                        <?php echo Yii::t('common', 'Оставьте свои контакты и получите бесплатную консультацию'); ?>
                                    </strong>
                                </h4>
                            </div>
                            <div class="col-md-12">
                                <p class="mb-4 form-text mbr-fonts-style display-7"><?php echo Yii::t('common', 'Детальный расчет стоимости по вашему проекту.')?></p>
                            </div>
                            <div data-for="name" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3 ">
                                <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Как вас зовут'])->label(false) ?>
                            </div>
                            <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <?= $form->field($model, 'phone_number')->textInput(['maxlength' => false])->widget(MaskedInput::className(), ['mask' => '+\9\9\8 (99) 999 99 99'])->label(false); ?>
                            </div>
                            <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <?//= $form->field($model, 'verifyCode')->widget(Captcha::class, ['template' => '<div class="row"><div class="col-lg-6">{input}</div><div class="col-lg-4">{image}</div></div>']) ?>
                            </div>

                            <div class="col-md-12 input-group-btn mt-2">
                                <?= Html::submitButton( Yii::t('common', 'Оставить заявку'), ['class' => 'w-100 w-100 btn btn-primary btn-form btn-bgr display-4', 'name' => 'contact-button']) ?>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>