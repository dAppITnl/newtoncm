<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sparepart;

/**
 * SparepartSearch represents the model behind the search form of `backend\models\Sparepart`.
 */
class SparepartSearch extends Sparepart
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['spp_id'], 'integer'],
            [['spp_name'], 'safe'],
            [['spp_costexcl', 'spp_vatperc'], 'number'],
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
        $query = Sparepart::find();

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
            'spp_id' => $this->spp_id,
            'spp_costexcl' => $this->spp_costexcl,
            'spp_vatperc' => $this->spp_vatperc,
        ]);

        $query->andFilterWhere(['like', 'spp_name', $this->spp_name]);

        return $dataProvider;
    }
}
