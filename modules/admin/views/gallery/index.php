<?php

/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 01.05.2023
 * Time: 02:32
 */

use yii\helpers\Html;

/** @var $this \app\components\View */
/** @var $row \app\models\GalleryModel */
/** @var $dataProvider \app\components\ActiveDataProvider */

$this->title = t("Галерея");
$this->params["breadcrumbs"][] = $this->title;
?>

<p class="text-right">
    <?= Html::a(
        '<i class="fa fa-plus"></i>',
        ["add"],
        ["class" => "btn btn-success p-t-3 p-r-10 p-b-3 p-l-10"]
    ) ?>
    <?= Html::a(
        '<i class="fa fa-list"></i>',
        ["index"],
        ["class" => "btn btn-info p-t-3 p-r-10 p-b-3 p-l-10"]
    ) ?>
</p>
<?php if ($dataProvider->models) : ?>
    <?= t("Общий") . " : " . $dataProvider->getTotalCount() ?><br><br>
    <div class="card mb-4 table-responsive">
        <div id="example_wrapper" class="container-fluid dt-bootstrap4 no-footer">
            <div class="row">
                <table class="table table-hover table-bordered dtr-inline table-striped">
                    <thead>
                        <tr>
                            <th style="width: 1%;" class="text-center">
                            <?php echo t("ID"); ?></th>
                            <th class="text-center"><?php echo t("Наименование"); ?></th>
                            <th class="text-center"><?php echo t("Изображения"); ?></th>
                            <th class="text-center"><?php echo t("Статус"); ?></th>
                            <th class="text-center"><?php echo t("Дата"); ?></th>
                            <th class="actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataProvider->models as $row) : ?>
                            <tr>
                                <td class="text-center"><?php echo $row->id; ?></td>
                                <td class="text-center"><?php echo $row->name; ?></td>
                                <td class="text-center"><?php echo Html::img(
                                                            $row->mainImage,
                                                            ["style" => "width:20%;"]
                                                        ); ?></td>
                                <td class="text-center"><?php echo $row->getStatusText(); ?></td>
                                <td class="text-center"><?php echo $row->created_at; ?></td>
                                <td class="actions">
                                    <?= Html::a(
                                        '<i class="fa fa-edit"></i>',
                                        ["update", "id" => $row->id],
                                        [
                                            "class" =>
                                            "btn btn-icon btn-pill btn-primary",
                                        ]
                                    ) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?= \yii\widgets\LinkPager::widget([
                    "pagination" => $dataProvider->pagination,
                ]) ?>

            </div>
        </div>
    </div>
<?php else : ?>
    <p class="alert alert-danger"> <?= t("Информация не найдена.") ?></p>
<?php endif; ?>