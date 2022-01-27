<?php

namespace common\models;

use common\models\base\Products as BaseProducts;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * This is the model class for table "products".
 */
class Products extends BaseProducts
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    public $imageFile;
    const PATH_PHOTO = '/uploads/photos/products/';

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            ]
        );
    }

    public static function getPhotoAlias()
    {
        return Yii::getAlias('@appRoot'). self::PATH_PHOTO;
    }

    public function getPhotoSrc()
    {
        return Url::to(self::PATH_PHOTO. $this->image);
    }

    public static function getLastId()
    {
        $lastId = Products::find()
            ->select('id')
            ->orderBy(['id' => SORT_DESC])
            ->active()
            ->scalar() ?: 0;
        return ++$lastId;
    }

    public function generatePhotoName()
    {
        return 'product_' .self::getLastId(). '-' .(int)(microtime(true) * (1000)). '.' .$this->imageFile->extension;
    }

    public function uploadPhoto()
    {
        if ($this->validate()) {
            $path = self::getPhotoAlias();
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $photoName = $this->generatePhotoName();
            $this->imageFile->saveAs($path . $photoName);
            $this->image = $photoName;
            return true;
        } else {
            return false;
        }
    }
}
