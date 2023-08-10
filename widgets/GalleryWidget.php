<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 03.05.2023
 * Time: 14:21
 */

namespace app\widgets;

use app\models\GalleryModel;
use yii\base\BaseObject;
use yii\base\Widget;

class GalleryWidget extends Widget
{
    public function init()
    {
        parent::init(); 
    }

    public function run()
    {
        $list = GalleryModel::find()
            ->where(["status" => GalleryModel::STATUS_ACTIVE])
            ->orderBy(["id" => SORT_DESC])
            ->limit(20)
            ->all();

        return $this->render("gallery", ["list" => $list]);
    }
}
