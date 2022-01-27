<?php

namespace backend\modules\settings\models\query;

/**
 * This is the ActiveQuery class for [[\backend\modules\settings\models\Message]].
 *
 * @see \backend\modules\settings\models\Message
 */
class MessageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\modules\settings\models\Message[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\modules\settings\models\Message|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
