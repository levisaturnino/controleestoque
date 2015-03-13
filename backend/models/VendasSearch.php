<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Vendas;

/**
 * VendasSearch represents the model behind the search form about `backend\models\Vendas`.
 */
class VendasSearch extends Vendas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_venda'], 'integer'],
            [['id_user', 'codigo_venda', 'linha1', 'linha2', 'linha3', 'linha4', 'linha5', 'linha6', 'linha7', 'linha8', 'linha9', 'linha10', 'id_cliente'], 'safe'],
            [['total_venda', 'total_cliente_pagou', 'troco'], 'number'],
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
        $query = Vendas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_venda' => $this->id_venda,
            'total_venda' => $this->total_venda,
            'total_cliente_pagou' => $this->total_cliente_pagou,
            'troco' => $this->troco,
        ]);

        $query->andFilterWhere(['like', 'id_user', $this->id_user])
            ->andFilterWhere(['like', 'codigo_venda', $this->codigo_venda])
            ->andFilterWhere(['like', 'linha1', $this->linha1])
            ->andFilterWhere(['like', 'linha2', $this->linha2])
            ->andFilterWhere(['like', 'linha3', $this->linha3])
            ->andFilterWhere(['like', 'linha4', $this->linha4])
            ->andFilterWhere(['like', 'linha5', $this->linha5])
            ->andFilterWhere(['like', 'linha6', $this->linha6])
            ->andFilterWhere(['like', 'linha7', $this->linha7])
            ->andFilterWhere(['like', 'linha8', $this->linha8])
            ->andFilterWhere(['like', 'linha9', $this->linha9])
            ->andFilterWhere(['like', 'linha10', $this->linha10])
            ->andFilterWhere(['like', 'id_cliente', $this->id_cliente]);

        return $dataProvider;
    }
}
