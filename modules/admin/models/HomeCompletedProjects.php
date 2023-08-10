<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "home_completed_projects".
 *
 * @property int $id
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_uz
 */
class HomeCompletedProjects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_completed_projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_en', 'title_ru', 'title_uz'], 'required'],
            [['title_en', 'title_ru', 'title_uz'], 'string'],
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
        ];
    }
}
