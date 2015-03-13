<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property integer $id_prod
 * @property string $id_user
 * @property string $nome_prod
 * @property double $preco_prod
 * @property string $estoque_prod
 * @property string $status_venda_prod
 * @property string $codigo_prod
 * @property string $qtd_venda_prod
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'nome_prod', 'preco_prod', 'estoque_prod', 'status_venda_prod', 'codigo_prod', 'qtd_venda_prod'], 'required'],
            [['preco_prod'], 'number'],
            [['id_user', 'nome_prod', 'estoque_prod', 'status_venda_prod', 'codigo_prod', 'qtd_venda_prod'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prod' => 'Id Prod',
            'id_user' => 'Id User',
            'nome_prod' => 'Nome ',
            'preco_prod' => 'Preco ',
            'estoque_prod' => 'Estoque Atual',
            'status_venda_prod' => 'Status Venda ',
            'codigo_prod' => 'Codigo Prodoudto',
            'qtd_venda_prod' => 'Quantidade Venda ',
        ];
    }
}
