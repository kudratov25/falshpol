<?php

namespace app\modules\admin\models;

use Yii;


/**
 * This is the model class for table "social_link".
 *
 * @property int $id
 * @property string $telegram
 * @property string $facebook
 * @property string $instagram
 * @property string $phone_number
 * @property string $email
 * @property string $adress
 */
class SocialLink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [
                [
                    "telegram",
                    "facebook",
                    "instagram",
                    "phone_number",
                    "email",
                    "address",
                ],
                "required",
            ],
            [
                [
                    "telegram",
                    "facebook",
                    "instagram",
                    "phone_number",
                    "email",
                    "address",
                ],
                "string",
                "max" => 255,
            ],
        ]; 
    }

    public function attributeLabels()
    {
        return [
            "id" => Yii::t("app", "ID"),
            "telegram" => Yii::t("app", "Telegram"),
            "facebook" => Yii::t("app", "Facebook"),
            "instagram" => Yii::t("app", "Instagram"),
            "phone_number" => Yii::t("app", "Номер телефона"),
            "email" => Yii::t("app", "Email"),
            "address" => Yii::t("app", "Адрес"),
        ];
    }
}
