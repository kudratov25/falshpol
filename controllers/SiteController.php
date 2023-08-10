<?php

namespace app\controllers;

use app\components\BaseController;
use app\models\Application;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\modules\admin\models\AboutHeader;
use app\modules\admin\models\AboutInfo;
use app\modules\admin\models\BuildingSolutions;
use app\modules\admin\models\FalshpolTypeShow;
use app\modules\admin\models\HomeAboutUs;
use app\modules\admin\models\HomeBenefits;
use app\modules\admin\models\HomeCompletedProjects;
use app\modules\admin\models\HomeHeader;
use app\modules\admin\models\HomeWhyUs;
use app\modules\admin\models\MontageHeader;
use app\modules\admin\models\MontageInfo;
use app\modules\admin\models\ProjectsHeader;
use app\modules\admin\models\ProjectShow;
use app\modules\admin\models\TypeFalshpolText;
use app\modules\admin\models\ProjectGallery;
use app\models\Visitor;

class SiteController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $home_header = HomeHeader::find()->orderBy(['id' => SORT_DESC])->one();
        $home_about_us = HomeAboutUs::find()->orderBy(['id' => SORT_DESC])->one();
        $home_why_us = HomeWhyUs::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();
        $home_benefits = HomeBenefits::find()->orderBy(['id' => SORT_DESC])->one();
        $home_completed_projects = HomeCompletedProjects::find()->orderBy(['id' => SORT_DESC])->limit(9)->all();
        //oxirgi 24 soatda kirganlar soni
        if (!Yii::$app->request->cookies->has('visitor')) {
            $visitor = new Visitor();
            $visitor->created_at = time();
            $visitor->save();
            Yii::$app->response->cookies->add(new \yii\web\Cookie([
                'name' => 'visitor',
                'value' => true,
                'expire' => time() + 24 * 60 * 60,
            ]));
        }

        $model = new Application();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('applicationSubmited');
            return $this->render("thanks");
        } else {
            return $this->render("index", compact("model", "home_header", "home_about_us", "home_benefits", "home_completed_projects"));
        }
    }


    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $about_header = AboutHeader::find()->orderBy('id', SORT_DESC)->one();
        $about_info = AboutInfo::find()->orderBy('id', SORT_DESC)->limit(4)->all();
        return $this->render('about', compact('about_header', 'about_info'));
    }
    public function actionMontage()
    {
        $montage_header = MontageHeader::find()->orderBy('id', SORT_DESC)->one();
        $montage_info = MontageInfo::find()->orderBy('id', SORT_ASC)->all();
        return $this->render('montage', compact('montage_header', 'montage_info'));
    }
    public function actionProjects()
    {
        $model = ProjectShow::find()->orderBy('id', SORT_ASC)->all();
        $projects_header = ProjectsHeader::find()->orderBy('id', SORT_ASC)->all();
        $myData = ["Hello, world!", 'some thing else'];
        Yii::$app->view->params['myData'] = $myData;
        return $this->render('projects', compact('projects_header', 'model'));
    }
    public function actionThanks()
    {
        return $this->render('thanks');
    }

    public function actionTypefalshpol()
    {
        $falshpol_type_show = FalshpolTypeShow::find()->orderBy('id', SORT_ASC)->all();
        $type_falshpol_text = TypeFalshpolText::find()->orderBy('id', SORT_DESC)->one();
        return $this->render('typefalshpol', compact('falshpol_type_show', 'type_falshpol_text'));
    }
    // =======================================================================//




    // ===================================================================//
    // 
    public function actionFalshpolTypeShow($id)
    {
        $falshpol_type_show = FalshpolTypeShow::findOne($id);
        if (!$falshpol_type_show) {
            throw new \yii\web\NotFoundHttpException(
                "The requested page does not exist."
            );
        }
        return $this->render('falshpol_type_show', compact('falshpol_type_show'));
    }

    //======================================================================//


    //==================================================================//
    // qanday binolar uchun
    public function actionPremisesShow($id)
    {
        $building_solution = BuildingSolutions::findOne($id);
        if (!$building_solution) {
            throw new \yii\web\NotFoundHttpException(
                "The requested page does not exist."
            );
        }
        return $this->render('premises_show', compact('building_solution'));
    }

    // ===================================================================//


    // ==================================================================//
    // prjects show 
    public function actionProjectShow($id)
    {
        $project = ProjectShow::findOne($id);

        $galleryImages = ProjectGallery::find()
            ->where(['project_show_id' => $id])
            ->all();
        if (!$project) {
            throw new \yii\web\NotFoundHttpException(
                "The requested page does not exist."
            );
        }
        return $this->render('project_show', compact('project', 'galleryImages'));
    }


    public function actionMaintenance()
    {
        return $this->render('maintenance');
    }
}
