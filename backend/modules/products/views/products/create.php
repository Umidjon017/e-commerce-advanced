<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Products $model
*/

$this->title = Yii::t('models', 'Products');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?= Html::a('Cancel', ['index'],
            ['class' => 'btn btn-danger']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
        'model' => $model,
    ]); ?>

</div>
