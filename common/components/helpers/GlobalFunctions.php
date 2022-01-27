<?php declare(strict_types=1);

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\ArrayHelper;

function dd($data)
{
    echo "<pre>";
    print_r($data);
    die();
}

// Not use because this does not work message extract
/*function t($message, $category = 'ui', $language = null, $params = [])
{
    return Yii::t($category, $message, $params, $language);
}*/

function url($url = '', $scheme = false): string
{
    return Url::to($url, $scheme);
}

function he($text): string
{
    return Html::encode($text);
}

function ph($text): string
{
    return HtmlPurifier::process($text);
}

function param($name, $default = null)
{
    return ArrayHelper::getValue(Yii::$app->params, $name, $default);
}
