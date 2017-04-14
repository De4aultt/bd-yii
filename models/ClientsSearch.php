<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clients;

/**
 * ClientsSearch represents the model behind the search form about `app\models\Clients`.
 */
class ClientsSearch extends Clients
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Client_Number', 'Manager_Pasport_Number'], 'integer'],
            [['Surname', 'Name', 'Father_name', 'Birthday', 'Gender'], 'safe'],
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
        $query = Clients::find();

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
            'Client_Number' => $this->Client_Number,
            'Birthday' => $this->Birthday,
            'Manager_Pasport_Number' => $this->Manager_Pasport_Number,
        ]);

        $query->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Father_name', $this->Father_name])
            ->andFilterWhere(['like', 'Gender', $this->Gender]);

        return $dataProvider;
    }
}
