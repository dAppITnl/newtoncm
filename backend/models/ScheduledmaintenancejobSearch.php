<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Scheduledmaintenancejob;

/**
 * ScheduledmaintenancejobSearch represents the model behind the search form of `backend\models\Scheduledmaintenancejob`.
 */
class ScheduledmaintenancejobSearch extends Scheduledmaintenancejob
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['smj_id', 'smjtsl_id', 'smjeng_id', 'smjmjb_id'], 'integer'],
            [['smj_title'], 'safe'],
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
        $query = Scheduledmaintenancejob::find();

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
            'smj_id' => $this->smj_id,
            'smjtsl_id' => $this->smjtsl_id,
            'smjeng_id' => $this->smjeng_id,
            'smjmjb_id' => $this->smjmjb_id,
        ]);

        $query->andFilterWhere(['like', 'smj_title', $this->smj_title]);

        return $dataProvider;
    }
}
