<?php

namespace backend\modules\settings\controllers\api;

/**
* This is the class for REST controller "SourceMessageController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class SourceMessageController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\modules\settings\models\SourceMessage';
}
