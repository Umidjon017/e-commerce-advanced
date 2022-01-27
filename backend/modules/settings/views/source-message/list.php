<?php

use backend\modules\settings\models\SourceMessage;
use kartik\popover\PopoverX;
use yii\helpers\Html;
use kartik\editable\Editable;

/* @var $this yii\web\View */

$this->title = Yii::t('ui', 'Source messages');
$this->params['breadcrumbs'][] = $this->title;
$langs = array_reverse(Yii::$app->params['languages']);
$sources = SourceMessage::find()->all();
$s = 0;
?>
<div class="source-message-list">

    <div class="panel panel-primary">

        <div class="panel-heading">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
                <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
        </div>

        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th><?= Yii::t('app', 'Source message') ?></th>
                        <?php foreach ($langs as $lang): ?>
                            <th>
                                <?php echo $lang; ?>
                            </th>
                        <?php endforeach; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($sources as $source):
                        $messages = $source->messages;
                        ?>
                        <?php $s++; ?>
                        <tr>
                            <td>
                                <?= $source->id ?>
                            </td>
                            <td>
                                <?= $source->message ?>
                            </td>
                            <?php foreach ($messages as $message): ?>
                                <?php
                                $value_lang = $message->translation;
                                ?>
                                <td>
                                    <?php
                                    $lang_code = $message->language;
                                    echo Editable::widget([
                                        'name' => 'translation[' . $lang_code . '][' . $source->id . ']',
                                        'asPopover' => true,
                                        'value' => $value_lang,
                                        'header' => 'Translation',
                                        'placement' => PopoverX::ALIGN_BOTTOM,
                                        'size' => 'md',
                                        'options' => [
                                            'class' => 'form-control',
                                            'placeholder' => 'Enter translation...'
                                        ]
                                    ]);
                                    ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
