<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 01.05.2023
 * Time: 00:04
 */

namespace app\models;

use app\components\BaseActiveRecord;

/**
 * Class GalleryModel
 * @package app\models
 * @property $user_id
 * @property $name
 * @property $images
 * @property $status
 * @property $created_at
 * @property $updated_at
 * @property $statusText
 * @property $mainImage
 */
class GalleryModel extends BaseActiveRecord
{
    public $delete_image;

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    const SCENARIO_EDIT = "edit";

    //lang 
    public $name_uz;
    public $name_ru;
    public $name_en;

    public static function tableName()
    {
        return "gallery";
    }

    /**
     * @return array
     */
    public function scenarios()
    {
        return [
            self::SCENARIO_EDIT => [
                "user_id",
                "name",
                "status",
                "images",
                "delete_image",
            ],
        ];
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [["name", "status"], "required", "on" => [self::SCENARIO_EDIT]],

            [
                "name",
                "string",
                "length" => [2, 300],
                "on" => [self::SCENARIO_EDIT],
            ],

            [
                "status",
                "in",
                "range" => array_keys(self::getStatusLabel()),
                "on" => [self::SCENARIO_EDIT],
            ],

            [
                ["images"],
                "file",
                "extensions" => "png, jpg",
                "maxFiles" => 10,
                "on" => [self::SCENARIO_EDIT],
            ],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            "name" => t("Наименование"),
            "images" => t("Изображения"),
            "created_at" => t("Дата создания"),
            "updated_at" => t("Дата редактирования"),
        ];
    }

    public static function getStatusLabel()
    {
        return [
            self::STATUS_ACTIVE => t("Активный"),
            self::STATUS_INACTIVE => t("Не активен"),
        ];
    }

    public function getStatusText()
    {
        $statusLabels = self::getStatusLabel();
        return array_key_exists($this->status, $statusLabels)
            ? $statusLabels[$this->status]
            : " - ";
    }

    /**
     * @return array
     */
    public static function translateAttributes()
    {
        return ["name"];
    }

    public function getMainImage()
    {
        $image = $this->images;
        return array_key_exists(0, $image) ? $image[0] : null;
    }
}