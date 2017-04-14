<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pictures;

/**
 * PictureSearch represents the model behind the search form about `app\models\Pictures`.
 */
class PictureSearch extends Pictures
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Picture_id', 'Price', 'Designer_pasport_number'], 'integer'],
            [['Date_made', 'File', 'Style'], 'safe'],
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
        $query = Pictures::find();

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
            'Picture_id' => $this->Picture_id,
            'Date_made' => $this->Date_made,
            'Price' => $this->Price,
            'Designer_pasport_number' => $this->Designer_pasport_number,
        ]);

        $query->andFilterWhere(['like', 'File', $this->File])
            ->andFilterWhere(['like', 'Style', $this->Style]);

        return $dataProvider;
    }
}
