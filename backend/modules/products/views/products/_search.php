<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var common\models\search\ProductsSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'user_email') ?>

		<?= $form->field($model, 'name') ?>

		<?= $form->field($model, 'description') ?>

		<?= $form->field($model, 'ikey') ?>

		<?php // echo $form->field($model, 'amount') ?>

		<?php // echo $form->field($model, 'quantity') ?>

		<?php // echo $form->field($model, 'availability') ?>

		<?php // echo $form->field($model, 'prod_condition') ?>

		<?php // echo $form->field($model, 'brand') ?>

		<?php // echo $form->field($model, 'stock') ?>

		<?php // echo $form->field($model, 'status') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'created_by') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
