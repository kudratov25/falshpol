<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "project_gallery".
 *
 * @property int $id
 * @property int $project_show_id
 * @property string|null $image
 *
 * @property ProjectShow $projectShow
 */
class ProjectGallery extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_show_id'], 'required'],
            [['project_show_id'], 'integer'],
            [['image'], 'file', 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 20],
            [['project_show_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectShow::class, 'targetAttribute' => ['project_show_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'project_show_id' => Yii::t('app', 'Project Show ID'),
            'image' => Yii::t('app', 'Image'),
        ];
    }


    /**
     * Gets query for [[ProjectShow]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectShow()
    {
        return $this->hasOne(ProjectShow::class, ['id' => 'project_show_id']);
    }
    public function getImageFilePath()
    {
        return Yii::getAlias('@webroot/' . $this->image);
    }
}
