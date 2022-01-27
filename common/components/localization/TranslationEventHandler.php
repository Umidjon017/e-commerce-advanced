<?php
namespace common\components\localization;

use yii\i18n\MissingTranslationEvent;

class TranslationEventHandler{
    public static function handleMissingTranslation(MissingTranslationEvent $event){
        if(YII_ENV_DEV){
//            $event->translatedMessage = "@Missing:{$event->category}.$event->message FOR LANGUAGE {$event->language} @";
            $event->translatedMessage = "$event->message _{$event->language} ( $event->category ) ";
        }
    }
}
