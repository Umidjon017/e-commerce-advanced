<?php


namespace common\helpers;


use common\models\Products;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class ProductsHelper
{
    public static function getStatusList() : array
    {
        return [
            Products::STATUS_ACTIVE => Yii::t('ui', 'Active'),
            Products::STATUS_INACTIVE => Yii::t('ui', 'Inactive'),
        ];
    }

    public static function getStatusLabel($status) : string
    {
        switch ($status) {
            case Products::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            case Products::STATUS_INACTIVE:
                $class = 'label label-danger';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::getStatusList(), $status), [
            'class' => $class,
        ]);
    }
}