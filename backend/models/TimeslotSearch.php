<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Timeslot;

/**
 * TimeslotSearch represents the model behind the search form of `backend\models\Timeslot`.
 */
class TimeslotSearch extends Timeslot
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tsl_id'], 'integer'],
            [['tsl_starttime', 'tsl_endtime'], 'safe'],
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
        $query = Timeslot::find();

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
            'tsl_id' => $this->tsl_id,
            'tsl_starttime' => $this->tsl_starttime,
            'tsl_endtime' => $this->tsl_endtime,
        ]);

        return $dataProvider;
    }
}
