<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "building_solutions".
 *
 * @property int $id
 * @property string $header_image
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_uz
 * @property string $text1_en
 * @property string $text1_ru
 * @property string $text1_uz
 * @property string $text2_en
 * @property string $text2_ru
 * @property string $text2_uz
 * @property string $text3_en
 * @property string $text3_ru
 * @property string $text3_uz
 * @property string $image_1
 * @property string $image_2
 * @property string $created_at
 */
class BuildingSolutions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'building_solutions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_en', 'title_ru', 'title_uz', 'text1_en', 'text1_ru', 'text1_uz', 'text2_en', 'text2_ru', 'text2_uz', 'text3_en', 'text3_ru', 'text3_uz'], 'required'],
            [['title_en', 'title_ru', 'title_uz', 'text1_en', 'text1_ru', 'text1_uz', 'text2_en', 'text2_ru', 'text2_uz', 'text3_en', 'text3_ru', 'text3_uz'], 'string'],
            [['created_at'], 'safe'],
            // [['header_image', 'image_1', 'image_2'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'header_image' => Yii::t('app', 'Header Image'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'text1_en' => Yii::t('app', 'Text1 En'),
            'text1_ru' => Yii::t('app', 'Text1 Ru'),
            'text1_uz' => Yii::t('app', 'Text1 Uz'),
            'text2_en' => Yii::t('app', 'Text2 En'),
            'text2_ru' => Yii::t('app', 'Text2 Ru'),
            'text2_uz' => Yii::t('app', 'Text2 Uz'),
            'text3_en' => Yii::t('app', 'Text3 En'),
            'text3_ru' => Yii::t('app', 'Text3 Ru'),
            'text3_uz' => Yii::t('app', 'Text3 Uz'),
            'image_1' => Yii::t('app', 'Image 1'),
            'image_2' => Yii::t('app', 'Image 2'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            $this->created_at = new Expression('NOW()');
        }
        $uploadsDir = "uploads/home/" . date("Y-m-d") . "/";
        if (!is_dir($uploadsDir)) {
            mkdir($uploadsDir);
        }

        // Handle image field
        if ($file = UploadedFile::getInstance($this, "image")) {
            $fileName = $this->generateFileName($file);
            $path = $uploadsDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }

        // Handle header_image field
        if ($file = UploadedFile::getInstance($this, "header_image")) {
            $fileName = $this->generateFileName($file);
            $path = $uploadsDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->header_image = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }

        // Handle image_1 field
        if ($file = UploadedFile::getInstance($this, "image_1")) {
            $fileName = $this->generateFileName($file);
            $path = $uploadsDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image_1 = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }

        // Handle image_2 field
        if ($file = UploadedFile::getInstance($this, "image_2")) {
            $fileName = $this->generateFileName($file);
            $path = $uploadsDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image_2 = $path;
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

        if ($this->headerImageFile) {
            $this->header_image =
                $uploadsAlias .
                $this->headerImageFile->baseName .
                "." .
                $this->headerImageFile->extension;
        }

        if ($this->image1File) {
            $this->image_1 =
                $uploadsAlias .
                $this->image1File->baseName .
                "." .
                $this->image1File->extension;
        }

        if ($this->image2File) {
            $this->image_2 =
                $uploadsAlias .
                $this->image2File->baseName .
                "." .
                $this->image2File->extension;
        }
    }


    // public function beforeSave($insert)
    // {
    //     // save current date time automatically
    //     if ($this->isNewRecord) { // only for new records
    //         $this->created_at = new Expression('NOW()'); // set the current date and time
    //     }
    //     if ($file = UploadedFile::getInstance($this, "image")) {
    //         $uploadDir = "uploads/home/" . date("Y-m-d") . "/";
    //         if (!is_dir($uploadDir)) {
    //             mkdir($uploadDir);
    //         }
    //         $fileName = $this->generateFileName($file);
    //         $path = $uploadDir . $fileName;
    //         $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
    //         if ($file->saveAs($absolutePath)) {
    //             $this->image = $path;
    //         } else {
    //             Yii::error("Failed to save uploaded file.");
    //         }
    //     }
    //     return parent::beforeSave($insert);
    // }
    // public function refreshImage()
    // {
    //     $uploadsAlias = Yii::getAlias("@webroot/uploads/home/");
    //     if ($this->imageFile) {
    //         $this->image =
    //             $uploadsAlias .
    //             $this->imageFile->baseName .
    //             "." .
    //             $this->imageFile->extension;
    //     }
    // }

    protected function generateFileName($file)
    {
        return uniqid() . "." . $file->extension;
    }
}
