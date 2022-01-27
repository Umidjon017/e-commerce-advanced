<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Products]].
 *
 * @see \common\models\Products
 */
class ProductsQuery extends \yii\db\ActiveQuery
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Products[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Products|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function active()
    {
        return $this->andWhere(['status' => self::STATUS_ACTIVE]);
    }
}
