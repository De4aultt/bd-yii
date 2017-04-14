<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PhoneNumbers;

/**
 * PhoneSearch represents the model behind the search form about `app\models\PhoneNumbers`.
 */
class PhoneSearch extends PhoneNumbers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Phone_number_id', 'Manager_pasport_number'], 'integer'],
            [['Mobile', 'Home'], 'safe'],
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
        $query = PhoneNumbers::find();

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
            'Phone_number_id' => $this->Phone_number_id,
            'Manager_pasport_number' => $this->Manager_pasport_number,
        ]);

        $query->andFilterWhere(['like', 'Mobile', $this->Mobile])
            ->andFilterWhere(['like', 'Home', $this->Home]);

        return $dataProvider;
    }
}
