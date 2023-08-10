<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "montage_info".
 *
 * @property int $id
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_uz
 * @property string $text_en
 * @property string $text_ru
 * @property string $text_uz
 */
class MontageInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'montage_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_en', 'title_ru', 'title_uz', 'text_en', 'text_ru', 'text_uz'], 'required'],
            [['title_en', 'title_ru', 'title_uz', 'text_en', 'text_ru', 'text_uz'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
        ];
    }
}
