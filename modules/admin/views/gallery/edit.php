<?php

/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 02.05.2023
 * Time: 04:01
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\helpers\Lang;

/** @var $this \app\components\View */
/** @var $model models\GalleryModel */
/** @var $form ActiveForm */

$action = Yii::$app->controller->action->id;
$this->title = in_array($action, ["create", "add"])
    ? t("Добавить новый")
    : t("Редактировать");
$this->params["breadcrumbs"][] = ["label" => t("Галерея"), "url" => ["index"]];
if (!in_array($action, ["create", "add"])) {
    $this->params["breadcrumbs"][] = [
        "label" => $model->name,
        "url" => ["view", "id" => $model->id],
    ];
}
$this->params["breadcrumbs"][] = $this->title;
?>

<div class="content-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model) ?>
    <div class="row">
        <div class="col-md-9 content-section">
            <?php
            $labels = "";
            $tabs = "";
            $i = 0;
            //langni olib name ni oddiy qilib olish k.k
            foreach (Lang::each() as $prefix => $each) {
                $class = $i == 0 ? "active" : "";
                $i++;
                $labels .=
                    '<li class="nav-item"><a class="nav-link ' .
                    $class .
                    '" data-toggle="tab" href="#' .
                    $prefix .
                    '">' .
                    $each .
                    "</a></li>";
                $tabs .=
                    '<div id="' .
                    $prefix .
                    '" class="tab-pane ' .
                    $class .
                    '">
                                    ' .
                    $form
                    ->field($model, Lang::field("name", $prefix))
                    ->textInput([
                        "maxlength" => true,
                        "data-field-name" => "name",
                        "data-language" => $prefix,
                        "class" => "form-control translate-field",
                    ]) .
                    '
                                </div>';
            }
            ?>
            <ul class="nav nav-tabs language-tabs">
                <?= $labels ?>
            </ul>
            <div class="tab-content language-content pt-4">
                <?= $tabs ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="file-loading">
                <?php
                $options = [];
                if (
                    $model->getOldAttribute("images") &&
                    count($model->getOldAttribute("images")) > 0
                ) {
                    foreach ($model->getOldAttribute("images")
                        as $item => $value) {
                        $options["initialPreview"][] = $value;
                        $options["initialPreviewConfig"][] = [
                            "caption" => "foto " . $item,
                            "size" => "873727",
                        ];
                    }
                    $options["initialPreviewAsData"] = true;
                    $options["initialCaption"] = $model->getAttributeLabel(
                        "images"
                    );
                    $options["overwriteInitial"] = "any";
                }

                $options["previewFileType"] = "any"; ?>
                <?= $form
                    ->field($model, "images[]")
                    ->widget(\kartik\file\FileInput::class, [
                        "language" => "ru",
                        "options" => ["multiple" => true],
                        "pluginOptions" => $options,
                    ]) ?>
            </div>
            `
        </div>
        <div class="col-md-9 right-section">
            <?= $form
                ->field($model, "status")
                ->radioList($model::getStatusLabel(), [
                    "item" => function (
                        $index,
                        $label,
                        $name,
                        $checked,
                        $value
                    ) use ($model) {
                        $return = '<div class="form-check form-check-inline">';
                        $return .=
                            '<input id="pro-type--' .
                            $value .
                            '" ' .
                            ($model->status == $value ? "checked" : "") .
                            '
                                                 class="form-check-input" type="radio" name="' .
                            $name .
                            '" value="' .
                            $value .
                            '"/>';
                        $return .=
                            '<label class="form-check-label" for="pro-type--' .
                            $value .
                            '">' .
                            ucwords($label) .
                            "</label>";
                        $return .= "</div>";

                        return $return;
                    },
                ]) ?>
        </div>
        <div class="col-md-9">
            <?= $form
                ->field($model, "delete_image")
                ->hiddenInput()
                ->label(false) ?>
        </div>
        <div class="col-md-9 right-section">
            <?= Html::submitButton(
                $model->isNewRecord ? t("Добавить новый") : t("Редактировать"),
                [
                    "class" => $model->isNewRecord
                        ? "btn btn-success"
                        : "btn btn-primary",
                ]
            ) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<?php $this->registerJs(
    "$('.kv-file-remove').click(function() {
  let src = $( this ).parent().parent().parent().parent().children().children().attr('src');
  
  let delDiv = $('#gallerymodel-delete_image').parent();
  
  $('<input>').attr({
    type: 'hidden',
    id: src,
    name: 'GalleryModel[delete_image][]',
    value: src
}).appendTo(delDiv);
$( this ).parent().parent().parent().parent().remove();  
});",
    \app\components\View::POS_READY
); ?>