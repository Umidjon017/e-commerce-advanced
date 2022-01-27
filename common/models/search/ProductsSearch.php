<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Products;

/**
* ProductsSearch represents the model behind the search form about `common\models\Products`.
*/
class ProductsSearch extends Products
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'quantity', 'stock', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['user_email', 'name', 'description', 'ikey', 'amount', 'availability', 'prod_condition', 'brand'], 'safe'],
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Products::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'quantity' => $this->quantity,
            'stock' => $this->stock,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'user_email', $this->user_email])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'ikey', $this->ikey])
            ->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'availability', $this->availability])
            ->andFilterWhere(['like', 'prod_condition', $this->prod_condition])
            ->andFilterWhere(['like', 'brand', $this->brand]);

return $dataProvider;
}
}