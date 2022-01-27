<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var common\models\Products $model
*/

$this->title = Yii::t('models', 'Products');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="products-update">

    <h1>
        <?= he($this->title) ?>:
        <small>
            <?= he($model->name) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('ui','View'), ['view', 'id' => $model->id], ['class' => 'btn btn-info']) ?>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . Yii::t('ui','Full list'), ['index'], ['class' => 'btn btn-warning']) ?>
        </div>
    </div>

    <hr />

    <?php echo $this->render('_form', [
        'model' => $model,
    ]); ?>

</div>
