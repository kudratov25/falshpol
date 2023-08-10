<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\UploadGallery;
use app\modules\admin\models\ProjectGallery;
use app\modules\admin\models\ProjectShow;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * ProjectGalleryController implements the CRUD actions for ProjectGallery model.
 */
class ProjectGalleryController extends AdminAccessController
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ProjectGallery models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ProjectGallery::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single ProjectGallery model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionView($id)
    {
        $model = $this->findModel($id);

        // Get all images with the same project_show_id
        $galleryImages = ProjectGallery::find()
            ->where(['project_show_id' => $model->project_show_id])
            ->all();

        return $this->render('view', [
            'model' => $model,
            'galleryImages' => $galleryImages,
        ]);
    }



    public function actionCreate()
    {
        $model = new ProjectGallery();

        $uploadDir = "uploads/gallery/" . date("Y-m-d") . "/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }
        if (Yii::$app->request->isPost) {
            $images = UploadedFile::getInstances($model, 'image');
            $model->project_show_id = Yii::$app->request->post('ProjectGallery')['project_show_id'];

            foreach ($images as $image) {
                $imageFile =  uniqid() . '.' . $image->extension;
                if ($image->saveAs($uploadDir . $imageFile)) {
                    $newModel = new ProjectGallery();
                    $newModel->project_show_id = $model->project_show_id;
                    $newModel->image = $uploadDir . $imageFile;
                    if ($newModel->save()) {
                        $model = $newModel;
                    }
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', ['model' => $model]);
    }


    /**
     * Updates an existing ProjectGallery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ProjectGallery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        // Delete the file
        $filePath = $model->getImageFilePath();
        if (is_file($filePath)) {
            unlink($filePath);
        }

        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProjectGallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return ProjectGallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProjectGallery::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }


   
}
