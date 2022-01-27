<?php

namespace backend\modules\settings\models\query;

/**
 * This is the ActiveQuery class for [[\backend\modules\settings\models\SourceMessage]].
 *
 * @see \backend\modules\settings\models\SourceMessage
 */
class SourceMessageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\modules\settings\models\SourceMessage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\modules\settings\models\SourceMessage|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function messages()
    {
        return $this->joinWith(['messages']);
    }
}
