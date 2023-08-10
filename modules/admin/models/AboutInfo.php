<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "about_info".
 *
 * @property int $id
 * @property int $number
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_uz
 */
class AboutInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'title_en', 'title_ru', 'title_uz'], 'required'],
            [['number'], 'integer'],
            [['title_en', 'title_ru', 'title_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'number' => Yii::t('app', 'Number'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
        ];
    }
}
