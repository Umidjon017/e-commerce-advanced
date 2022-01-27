<?php

namespace backend\modules\settings\models;

use Yii;
use \backend\modules\settings\models\base\Message as BaseMessage;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "message".
 */
class Message extends BaseMessage
{

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
                # custom validation rules
            ]
        );
    }
}
