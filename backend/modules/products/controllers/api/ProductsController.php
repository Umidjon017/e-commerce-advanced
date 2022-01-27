<?php

namespace backend\modules\products\controllers\api;

/**
* This is the class for REST controller "ProductsController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ProductsController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Products';
}
