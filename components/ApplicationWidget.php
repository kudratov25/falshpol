<?php

namespace app\components;

use app\models\Application;
use Yii;
use yii\base\Widget;

class ApplicationWidget extends Widget
{
    public function run()
    {
        $model = new Application();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return Yii::$app->getResponse()->redirect(["site/thanks"])->send();
        } else {
            return $this->render("second_form", ["model" => $model]);
        }
    }
}
