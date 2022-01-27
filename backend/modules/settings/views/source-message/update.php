<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var backend\modules\settings\models\SourceMessage $model
*/

$this->title = Yii::t('ui', 'Source Message');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Source Message'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud source-message-update">

    <h1>
        <?= Yii::t('ui', 'Source Message') ?>
        <small>
                        <?= Html::encode($model->id) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
