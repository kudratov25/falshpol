<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "falshpol_type_show".
 *
 * @property int $id
 * @property string $head_title_en
 * @property string $head_title_ru
 * @property string $head_title_uz
 * @property string $head_text_en
 * @property string $head_text_ru
 * @property string $head_text_uz
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_uz
 * @property string $text_en
 * @property string $text_ru
 * @property string $text_uz
 * @property string $full_text_en
 * @property string $full_text_ru
 * @property string $full_text_uz
 * @property string $image
 * @property string $created_at
 */
class FalshpolTypeShow extends \yii\db\ActiveRecord
{
    public $imageFile;
    public $HeaderimageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'falshpol_type_show';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['head_title_en', 'head_title_ru', 'head_title_uz', 'head_text_en', 'head_text_ru', 'head_text_uz', 'title_en', 'title_ru', 'title_uz', 'text_en', 'text_ru', 'text_uz', 'full_text_en', 'full_text_ru', 'full_text_uz',], 'required'],
            [['head_text_en', 'head_text_ru', 'head_text_uz', 'text_en', 'text_ru', 'text_uz', 'full_text_en', 'full_text_ru', 'full_text_uz'], 'string'],
            [['created_at'], 'safe'],
            [['head_title_en', 'head_title_ru', 'head_title_uz', 'title_en', 'title_ru', 'title_uz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'head_title_en' => Yii::t('app', 'Head Title En'),
            'head_title_ru' => Yii::t('app', 'Head Title Ru'),
            'head_title_uz' => Yii::t('app', 'Head Title Uz'),
            'head_text_en' => Yii::t('app', 'Head Text En'),
            'head_text_ru' => Yii::t('app', 'Head Text Ru'),
            'head_text_uz' => Yii::t('app', 'Head Text Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'full_text_en' => Yii::t('app', 'Full Text En'),
            'full_text_ru' => Yii::t('app', 'Full Text Ru'),
            'full_text_uz' => Yii::t('app', 'Full Text Uz'),
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
        if ($imageFile = UploadedFile::getInstance($this, "image")) {
            $uploadDir = "uploads/home/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $fileName = $this->generateFileName($imageFile);
            $path = $uploadDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($imageFile->saveAs($absolutePath)) {
                $this->image = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }
        if ($HeaderimageFile = UploadedFile::getInstance($this, "header_image")) {
            $uploadDir = "uploads/home/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $fileName = $this->generateFileName($HeaderimageFile);
            $path = $uploadDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($HeaderimageFile->saveAs($absolutePath)) {
                $this->header_image = $path;
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
        $uploadsAlias = Yii::getAlias("@webroot/uploads/home/");
        if ($this->HeaderimageFile) {
            $this->HeaderimageFile =
                $uploadsAlias .
                $this->HeaderimageFile->baseName .
                "." .
                $this->HeaderimageFile->extension;
        }
    }


    protected function generateFileName($file)
    {
        return uniqid() . "." . $file->extension;
    }
}
