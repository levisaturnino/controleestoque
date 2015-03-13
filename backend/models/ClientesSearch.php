<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Clientes;

/**
 * ClientesSearch represents the model behind the search form about `backend\models\Clientes`.
 */
class ClientesSearch extends Clientes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cli'], 'integer'],
            [['id_user', 'nome_cli', 'endereco_cli', 'cidade_cli', 'uf_cli', 'email_cli'], 'safe'],
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
        $query = Clientes::find();

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
            'id_cli' => $this->id_cli,
        ]);

        $query->andFilterWhere(['like', 'id_user', $this->id_user])
            ->andFilterWhere(['like', 'nome_cli', $this->nome_cli])
            ->andFilterWhere(['like', 'endereco_cli', $this->endereco_cli])
            ->andFilterWhere(['like', 'cidade_cli', $this->cidade_cli])
            ->andFilterWhere(['like', 'uf_cli', $this->uf_cli])
            ->andFilterWhere(['like', 'email_cli', $this->email_cli]);

        return $dataProvider;
    }
}
