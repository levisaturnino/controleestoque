<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Produtos;

/**
 * ProdutosSearch represents the model behind the search form about `backend\models\Produtos`.
 */
class ProdutosSearch extends Produtos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prod'], 'integer'],
            [['id_user', 'nome_prod', 'estoque_prod', 'status_venda_prod', 'codigo_prod', 'qtd_venda_prod'], 'safe'],
            [['preco_prod'], 'number'],
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
        $query = Produtos::find();

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
            'id_prod' => $this->id_prod,
            'preco_prod' => $this->preco_prod,
        ]);

        $query->andFilterWhere(['like', 'id_user', $this->id_user])
            ->andFilterWhere(['like', 'nome_prod', $this->nome_prod])
            ->andFilterWhere(['like', 'estoque_prod', $this->estoque_prod])
            ->andFilterWhere(['like', 'status_venda_prod', $this->status_venda_prod])
            ->andFilterWhere(['like', 'codigo_prod', $this->codigo_prod])
            ->andFilterWhere(['like', 'qtd_venda_prod', $this->qtd_venda_prod]);

        return $dataProvider;
    }
}
