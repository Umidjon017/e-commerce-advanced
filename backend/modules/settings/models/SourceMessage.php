<?php

namespace backend\modules\settings\models;

use Yii;
use \backend\modules\settings\models\base\SourceMessage as BaseSourceMessage;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "source_message".
 */
class SourceMessage extends BaseSourceMessage
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
