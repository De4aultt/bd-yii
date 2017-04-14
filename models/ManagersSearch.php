<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Managers;

/**
 * ManagersSearch represents the model behind the search form about `app\models\Managers`.
 */
class ManagersSearch extends Managers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Manager_pasport_number', 'Salary'], 'integer'],
            [['Surname', 'Name', 'Father_name', 'Birthday'], 'safe'],
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
        $query = Managers::find();

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
            'Manager_pasport_number' => $this->Manager_pasport_number,
            'Birthday' => $this->Birthday,
            'Salary' => $this->Salary,
        ]);

        $query->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Father_name', $this->Father_name]);

        return $dataProvider;
    }
}
