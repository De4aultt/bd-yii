<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Designers;

/**
 * DesignersSearch represents the model behind the search form about `app\models\Designers`.
 */
class DesignersSearch extends Designers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Designer_pasport_number', 'Salary'], 'integer'],
            [['Surname', 'Name', 'Father_name', 'Gender', 'Email'], 'safe'],
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
        $query = Designers::find();

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
            'Designer_pasport_number' => $this->Designer_pasport_number,
            'Salary' => $this->Salary,
        ]);

        $query->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Father_name', $this->Father_name])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Email', $this->Email]);

        return $dataProvider;
    }
}
