<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "montage_header".
 *
 * @property int $id
 * @property string $text_en
 * @property string $text_ru
 * @property string $text_uz
 * @property string $youtube_link
 */
class MontageHeader extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'montage_header';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_ru', 'text_uz', 'youtube_link'], 'required'],
            [['text_en', 'text_ru', 'text_uz', 'youtube_link'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text_en' => Yii::t('app', 'Text En'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'youtube_link' => Yii::t('app', 'Youtube Link'),
        ];
    }
}
