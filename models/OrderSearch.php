<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orders;

/**
 * OrderSearch represents the model behind the search form about `app\models\Orders`.
 */
class OrderSearch extends Orders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Order_id', 'Manager_pasport_number'], 'integer'],
            [['Order_Date', 'Town', 'Street', 'House'], 'safe'],
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
        $query = Orders::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Order_id' => $this->Order_id,
            'Order_Date' => $this->Order_Date,
            'Manager_pasport_number' => $this->Manager_pasport_number,
        ]);

        $query->andFilterWhere(['like', 'Town', $this->Town])
            ->andFilterWhere(['like', 'Street', $this->Street])
            ->andFilterWhere(['like', 'House', $this->House]);

        return $dataProvider;
    }
}
