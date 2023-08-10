<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "project_show".
 *
 * @property int $id
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_uz
 * @property string $text_en
 * @property string $text_ru
 * @property string $text_uz
 * @property string $image
 * @property string $created_at
 */
class ProjectShow extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_show';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_en', 'title_ru', 'title_uz', 'text_en', 'text_ru', 'text_uz'], 'required'],
            [['text_en', 'text_ru', 'text_uz'], 'string'],
            [['created_at'], 'safe'],
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
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'image' => Yii::t('app', 'Image'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
    public function beforeSave($insert)
    {
        // save current date time automatically
        if ($this->isNewRecord) { // only for new records
            $this->created_at = new Expression('NOW()'); // set the current date and time
        }
        if ($file = UploadedFile::getInstance($this, "image")) {
            $uploadDir = "uploads/home/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $fileName = $this->generateFileName($file);
            $path = $uploadDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }
        return parent::beforeSave($insert);
    }
    public function refreshImage()
    {
        $uploadsAlias = Yii::getAlias("@webroot/uploads/home/");
        if ($this->imageFile) {
            $this->image =
                $uploadsAlias .
                $this->imageFile->baseName .
                "." .
                $this->imageFile->extension;
        }
    }

    protected function generateFileName($file)
    {
        return uniqid() . "." . $file->extension;
    }
}
