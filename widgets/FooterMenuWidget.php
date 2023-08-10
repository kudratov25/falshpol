<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 30.07.2023
 * Time: 23:17
 */

namespace app\widgets;

use yii\base\Widget;
use app\helpers\Html;
use yii\helpers\Url;
use app\modules\admin\models\FalshpolTypeShow;
use Yii;

class FooterMenuWidget extends Widget
{
    public $items;
    public $catalogs;
    public $premises;
    public $social_links;
    public $logo;

    public function init()
    {
        parent::init();

        if ($this->items === null) {
            $this->items = [];
        }
    }

    public function run()
    {
        $menuHtml =
            '<section data-bs-version="5.1" class="footer1 expertm5 cid-tuMgeJFFu0" once="footers" id="afooter1-z">';
        $menuHtml .= '<div class="container">';
        $menuHtml .= '<div class="row">';

        $menuHtml .= $this->renderMenu($this->items);
        $menuHtml .= $this->renderCatalog($this->catalogs);
        $menuHtml .= $this->renderPremises($this->premises);

        $menuHtml .= "</div>";
        $menuHtml .= "</div>";
        $menuHtml .= "</section>";

        return $menuHtml;
    }

    protected function renderMenu($items)
    {
        $menuHtml = '<div class="col-12 col-sm-6 col-lg-3">';
        $menuHtml .= '<div class="item-wrap">';

        foreach ($items as $item) {
            $menuHtml .=
                '<h5 class="mbr-section-subtitle mbr-fonts-style display-4">';
            $menuHtml .=
                '<a href="' .
                $item["url"] .
                '" class="text-white">' .
                $item["label"] .
                "</a></h5>";
        }

        $menuHtml .= "</div>";
        $menuHtml .= "</div>";

        return $menuHtml;
    }

    protected function renderCatalog($catalogs)
    {
        $catalogHtml = '<div class="col-12 col-sm-6 col-lg-3">';
        $catalogHtml .= '<div class="item-wrap">';
        $catalogHtml .=
            '<h5 class="mbr-section-subtitle mbr-fonts-style display-4"><strong>Каталог</strong></h5>';

        foreach ($catalogs as $catalog) {
            $catalogHtml .= '<li class="mbr-text item-wrap">';
            $catalogHtml .= Html::a(
                "► " . $catalog["title"],
                ["falshpol-type-show", "id" => $catalog["id"]],
                ["class" => "text-primary"]
            );
            $catalogHtml .= "</li>";
        }

        $catalogHtml .= "</div>";
        $catalogHtml .= "</div>";

        return $catalogHtml;
    }

    protected function renderPremises($premises)
    {
        $premisesHtml = '<div class="col-12 col-sm-6 col-lg-3">';
        $premisesHtml .= '<div class="item-wrap">';
        $premisesHtml .=
            '<h5 class="mbr-section-subtitle mbr-fonts-style display-4"><strong>Фальшпол для&nbsp;</strong></h5>';

        foreach ($premises as $premise) {
            $premisesHtml .= '<li class="mbr-text item-wrap">';
            $premisesHtml .= Html::a(
                "► " . $premise["title"],
                ["premises-show", "id" => $premise["id"]],
                ["class" => "text-primary"]
            );
            $premisesHtml .= "</li>";
        }

        $premisesHtml .= "</div>";
        $premisesHtml .= "</div>";

        return $premisesHtml;
    }
}
