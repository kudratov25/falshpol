<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "projects_header".
 *
 * @property int $id
 * @property string $text_en
 * @property string $text_ru
 * @property string $text_uz
 */
class ProjectsHeader extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects_header';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_ru', 'text_uz'], 'required'],
            [['text_en', 'text_ru', 'text_uz'], 'string'],
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
        ];
    }
}
