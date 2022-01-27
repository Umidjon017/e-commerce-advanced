<?php

use common\helpers\ProductsHelper;
use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Products $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="products-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Products',
    'options' => ['enctype' => 'multipart/form-data'],
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger',
    'fieldConfig' => [
             'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
             'horizontalCssClasses' => [
                 'label' => 'col-sm-2',
                 #'offset' => 'col-sm-offset-4',
                 'wrapper' => 'col-sm-8',
                 'error' => '',
                 'hint' => '',
             ],
         ],
    ]
    );
    ?>

    <div class="">
        <p>
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'quantity')->textInput() ?>

            <?= $form->field($model, 'stock')->textInput() ?>

            <?= $form->field($model, 'availability')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'prod_condition')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

<!--            --><?//= $form->field($model, 'imageFile')->fileInput(['accept' => "image/jpeg, image/png"])?>

            <?=  $form->field($model, 'imageFile')->widget(FileInput::classname(), [ 'attribute' => 'image',
                'pluginOptions' => [
                    'accept' => "image/png , image/jpeg",
                    'showPreview' => false,
                    'showCaption' => true,
                    'showRemove' => true,
                    'showUpload' =>true
                ]
            ]) ?>

            <?= $form->field($model, 'status')->dropDownList(ProductsHelper::getStatusList()) ?>
        </p>

        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? 'Create' : 'Save'),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

