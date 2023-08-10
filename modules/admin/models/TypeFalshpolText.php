<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "type_falshpol_text".
 *
 * @property int $id
 * @property string $image1
 * @property string $image2
 * @property string $text1_en
 * @property string $text1_ru
 * @property string $text1_uz
 * @property string $text2_en
 * @property string $text2_ru
 * @property string $text2_uz
 * @property string $text3_en
 * @property string $text3_ru
 * @property string $text3_uz
 * @property string $text4_en
 * @property string $text4_ru
 * @property string $text4_uz
 * @property string $created_at
 */
class TypeFalshpolText extends \yii\db\ActiveRecord
{
    public $image1File;
    public $image2File;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_falshpol_text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text1_en', 'text1_ru', 'text1_uz', 'text2_en', 'text2_ru', 'text2_uz', 'text3_en', 'text3_ru', 'text3_uz', 'text4_en', 'text4_ru', 'text4_uz',], 'required'],
            [['text1_en', 'text1_ru', 'text1_uz', 'text2_en', 'text2_ru', 'text2_uz', 'text3_en', 'text3_ru', 'text3_uz', 'text4_en', 'text4_ru', 'text4_uz', 'created_at'], 'string'],
            // [['image1', 'image2'], 'string', 'max' => 255],
            // [
            //     ["image1", "image2"],
            //     "image",
            //     "extensions" => "jpg, jpeg, gif, png",
            // ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image1' => Yii::t('app', 'Image1'),
            'image2' => Yii::t('app', 'Image2'),
            'text1_en' => Yii::t('app', 'Text1 En'),
            'text1_ru' => Yii::t('app', 'Text1 Ru'),
            'text1_uz' => Yii::t('app', 'Text1 Uz'),
            'text2_en' => Yii::t('app', 'Text2 En'),
            'text2_ru' => Yii::t('app', 'Text2 Ru'),
            'text2_uz' => Yii::t('app', 'Text2 Uz'),
            'text3_en' => Yii::t('app', 'Text3 En'),
            'text3_ru' => Yii::t('app', 'Text3 Ru'),
            'text3_uz' => Yii::t('app', 'Text3 Uz'),
            'text4_en' => Yii::t('app', 'Text4 En'),
            'text4_ru' => Yii::t('app', 'Text4 Ru'),
            'text4_uz' => Yii::t('app', 'Text4 Uz'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            $this->created_at = new Expression("NOW()");
        }
        $uploadsDir = "uploads/home/" . date("Y-m-d") . "/";
        if (!is_dir($uploadsDir)) {
            mkdir($uploadsDir);
        }

        // Handle image1 field
        if ($image1File = UploadedFile::getInstance($this, "image1")) {
            // Ensure that the uploaded file is an image
            if ($image1File->type !== 'image/jpeg' && $image1File->type !== 'image/png') {
                throw new \yii\base\InvalidArgumentException("Invalid file type for image1. Only JPEG and PNG files are allowed.");
            }

            $fileName = $this->generateUniqueFileName($image1File);
            $path = $uploadsDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($image1File->saveAs($absolutePath)) {
                $this->image1 = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }

        // Handle image2 field
        if ($image2File = UploadedFile::getInstance($this, "image2")) {
            // Ensure that the uploaded file is an image
            if ($image2File->type !== 'image/jpeg' && $image2File->type !== 'image/png') {
                throw new \yii\base\InvalidArgumentException("Invalid file type for image2. Only JPEG and PNG files are allowed.");
            }

            $fileName = $this->generateUniqueFileName($image2File);
            $path = $uploadsDir . $fileName;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($image2File->saveAs($absolutePath)) {
                $this->image2 = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }

        return parent::beforeSave($insert);
    }

    /**
     * Generates a unique filename for an uploaded file.
     *
     * @param UploadedFile $file the uploaded file instance
     * @return string the generated filename
     */
    private function generateUniqueFileName($file)
    {
        $baseName = pathinfo($file->name, PATHINFO_FILENAME);
        $extension = $file->extension;
        $counter = 0;
        do {
            $fileName = $baseName . ($counter > 0 ? "_" . $counter : "") . "." . $extension;
            $counter++;
        } while (file_exists($fileName));
        return $fileName;
    }

    public function refreshImage()
    {
        $uploadsAlias = Yii::getAlias("@webroot/uploads/home/");

        if ($this->image1File) {
            $this->image1 =
                $uploadsAlias .
                $this->image1File->baseName .
                "." .
                $this->image1File->extension;
        }

        if ($this->image2File) {
            $this->image2 =
                $uploadsAlias .
                $this->image2File->baseName .
                "." .
                $this->image2File->extension;
        }

        if ($this->headerImageFile) {
            $this->headerImage =
                $uploadsAlias .
                $this->headerImageFile->baseName .
                "." .
                $this->headerImageFile->extension;
        }

        return parent::beforeSave($insert);
    }
    protected function generateFileName($file)
    {
        return uniqid() . "." . $file->extension;
    }
}
