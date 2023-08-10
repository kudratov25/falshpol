<?php

namespace app\components;

use app\modules\admin\models\BuildingSolutions;
use app\modules\admin\models\FalshpolTypeShow;
use app\modules\admin\models\HomeCertificates;
use app\modules\admin\models\HomeClients;
use app\modules\admin\models\HomePartners;
use app\modules\admin\models\HomeWhyUs;
use app\modules\admin\models\SocialLink;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;

class BaseController extends Controller
{
    public function behaviors()
    {
        return [
            "verbs" => [
                "class" => VerbFilter::class,
                "actions" => [
                    "delete" => ["POST"],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        $lang = Yii::$app->language;

        // social links like telegram instagram facebook and phone number,email
        $social_link = SocialLink::find()
            ->orderBy(["id" => SORT_DESC])
            ->one();
        $home_why_us = HomeWhyUs::find()
            ->orderBy(["id" => SORT_DESC])
            ->limit(3)
            ->all();
        $home_clients = HomeClients::find()
            ->orderBy(["id" => SORT_ASC])
            ->limit(3)
            ->all();
        $home_certificates = HomeCertificates::find()
            ->orderBy(["id" => SORT_ASC])
            ->limit(10)
            ->all();
        $home_partners = HomePartners::find()
            ->orderBy(["id" => SORT_ASC])
            ->limit(4)
            ->all();
        $building_soutions = BuildingSolutions::find()
            ->orderBy(["id" => SORT_ASC])
            ->all();

        // sending catalog names to layout
        $data = FalshpolTypeShow::find()->all();
        $catalogs = [];
        foreach ($data as $item) {
            $catalogs[] = [
                "id" => $item->id,
                "title" => $item->{"title_" . $lang},
            ];
        }

        // Define the phrases to remove and their corresponding replacements for each language
        $phrasesToRemove = [
            "ru" => "Фальшпол для",
            "uz" => "falshpollar", // Only "falshpollar" for Uzbek version
            "en" => "Raised floor for",
        ];

        // sending premises(building solutions) names to layout
        $datatwo = BuildingSolutions::find()->all();
        $premises = [];
        foreach ($datatwo as $item) {
            $title = $item->{"title_" . $lang};

            // Check if the language is in the phrasesToRemove array
            if (isset($phrasesToRemove[$lang])) {
                $phraseToRemove = $phrasesToRemove[$lang];

                // Check if the title starts with the phrase to remove
                if (mb_stripos($title, $phraseToRemove) === 0) {
                    // Remove the phrase from the beginning of the title
                    $title = mb_substr($title, mb_strlen($phraseToRemove));

                    // Uppercase the first letter after the phrase
                    $title = preg_replace_callback(
                        '/(\p{L})/u',
                        function ($matches) {
                            return mb_strtoupper($matches[1]);
                        },
                        $title,
                        1 // Limit to the first occurrence
                    );
                } else {
                    // Check if the title ends with the phrase to remove
                    $pos = mb_stripos($title, $phraseToRemove);
                    if ($pos !== false && $pos + mb_strlen($phraseToRemove) === mb_strlen($title)) {
                        // Remove the phrase from the end of the title
                        $title = mb_substr($title, 0, $pos);
                    }
                }
            }

            $premises[] = [
                "id" => $item->id,
                "title" => $title,
            ];
        }

        $myData = ["one", "two"];

        Yii::$app->view->params["social_link"] = $social_link;
        Yii::$app->view->params["home_why_us"] = $home_why_us;
        Yii::$app->view->params["home_clients"] = $home_clients;
        Yii::$app->view->params["home_certificates"] = $home_certificates;
        Yii::$app->view->params["home_partners"] = $home_partners;
        Yii::$app->view->params["building_soutions"] = $building_soutions;

        // sending catalog names to footter
        Yii::$app->view->params["catalogs"] = $catalogs;

        // sending catalog names to footter
        Yii::$app->view->params["premises"] = $premises;

        Yii::$app->view->params["myData"] = $myData;
        return parent::beforeAction($action);
    }
}
