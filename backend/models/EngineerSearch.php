<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Engineer;

/**
 * EngineerSearch represents the model behind the search form of `backend\models\Engineer`.
 */
class EngineerSearch extends Engineer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eng_id'], 'integer'],
            [['eng_name'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Engineer::find();

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
            'eng_id' => $this->eng_id,
        ]);

        $query->andFilterWhere(['like', 'eng_name', $this->eng_name]);

        return $dataProvider;
    }
}
