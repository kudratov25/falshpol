<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 01.05.2023
 * Time: 02:01
 */

namespace app\modules\admin\controllers;

use Yii;
use app\helpers\Html;
use app\helpers\Assert;
use app\models\GalleryModel;
use app\components\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * Class GalleryController
 * @package app\modules\admin\controllers
 */
class GalleryController extends \app\components\RootController
{
    /**
     * Barcha ma'lumotlar ro'yhatini chiqarish uchun
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = GalleryModel::find();
        $dataProvider = new ActiveDataProvider([
            "query" => $query,
            "pagination" => [
                "pageSize" => 20,
            ],
        ]);

        return $this->render("index", [
            "dataProvider" => $dataProvider,
        ]);
    }

    /** Yangi ma'lumot qo'shish uchun
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\base\ExitException
     */
    public function actionAdd()
    {
        $model = new GalleryModel();
        $model->user_id = Yii::$app->user->identity->id;
        return $this->editBlock($model);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws \yii\base\ExitException
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionUpdate($id)
    {
        Assert::isUnsignedInteger($id);

        $model = $this->findModel($id);
        return $this->editBlock($model);
    }

    /**
     * @param  GalleryModel $model
     * @return string|\yii\web\Response
     * @throws \yii\base\ExitException
     * @throws \yii\web\NotFoundHttpException
     */
    protected function editBlock(GalleryModel &$model)
    {
        $model->setScenario(GalleryModel::SCENARIO_EDIT);

        if ($model->runValidate()) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                $model->images = UploadedFile::getInstances($model, "images");

                $files = [];
                $i = 1;

                foreach ($model->images as $file) {
                    $name = time() + $i . "." . $file->extension;
                    $path = "uploads/gallery/" . $name;
                    $files[] = "/" . $path;
                    $file->saveAs($path, false);
                    $i++;
                }

                if (count($files) > 0) {
                    if ($model->getOldAttribute("images")) {
                        $img = $model->getOldAttribute("images");
                        foreach ($files as $f) {
                            $img[] = $f;
                        }
                        $model->images = $img;
                    } else {
                        $model->images = $files;
                    }
                } else {
                    $model->images = $model->getOldAttribute("images");
                }

                if ($model->delete_image && count($model->delete_image) > 0) {
                    $filtered = [];
                    foreach ($model->images as $f) {
                        if (in_array($f, $model->delete_image)) {
                            continue;
                        }
                        $filtered[] = $f;
                    }

                    $model->images = $filtered;
                }
                $model->save();
                $transaction->commit();
                Html::alertSuccess(t("Ma'lumotlar muvaffaqiyatli saqlandi."));
                return $this->redirect(["index"]);
            } catch (\Exception $e) {
                print_variable($e->getMessage());
                Html::alertTransactionException($e);
                $transaction->rollBack();
            }
        }
        if ($model->isNewRecord) {
            $model->status = $model::STATUS_ACTIVE;
        }
        return $this->render("edit", [
            "model" => $model,
        ]);
    }

    /**
     * @param $id
     * @return GalleryModel|array|\yii\db\ActiveRecord|null
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (
            ($model = GalleryModel::find()
                ->where(["id" => $id])
                ->one()) !== null
        ) {
            return $model;
        } else {
            throw new NotFoundHttpException();
        }
    }
}
