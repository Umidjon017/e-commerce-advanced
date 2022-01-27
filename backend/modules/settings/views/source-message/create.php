<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var backend\modules\settings\models\SourceMessage $model
*/

$this->title = Yii::t('ui', 'Source Message');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Source Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud source-message-create">

    <h1>
        <?= Yii::t('ui', 'Source Message') ?>
        <small>
                        <?= Html::encode($model->id) ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            'Cancel',
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
