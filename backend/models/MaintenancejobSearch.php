<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Maintenancejob;

/**
 * MaintenancejobSearch represents the model behind the search form of `backend\models\Maintenancejob`.
 */
class MaintenancejobSearch extends Maintenancejob
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mjb_id'], 'integer'],
            [['mjb_title'], 'safe'],
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
        $query = Maintenancejob::find();

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
            'mjb_id' => $this->mjb_id,
        ]);

        $query->andFilterWhere(['like', 'mjb_title', $this->mjb_title]);

        return $dataProvider;
    }
}
