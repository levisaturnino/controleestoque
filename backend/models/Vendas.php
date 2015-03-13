<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "vendas".
 *
 * @property integer $id_venda
 * @property string $id_user
 * @property string $codigo_venda
 * @property string $linha1
 * @property string $linha2
 * @property string $linha3
 * @property string $linha4
 * @property string $linha5
 * @property string $linha6
 * @property string $linha7
 * @property string $linha8
 * @property string $linha9
 * @property string $linha10
 * @property double $total_venda
 * @property double $total_cliente_pagou
 * @property double $troco
 * @property string $id_cliente
 */
class Vendas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'codigo_venda', 'linha1', 'linha2', 'linha3', 'linha4', 'linha5', 'linha6', 'linha7', 'linha8', 'linha9', 'linha10', 'total_venda', 'total_cliente_pagou', 'troco', 'id_cliente'], 'required'],
            [['total_venda', 'total_cliente_pagou', 'troco'], 'number'],
            [['id_user', 'codigo_venda', 'linha1', 'linha2', 'linha3', 'linha4', 'linha5', 'linha6', 'linha7', 'linha8', 'linha9', 'linha10', 'id_cliente'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_venda' => 'Id Venda',
            'id_user' => 'Id User',
            'codigo_venda' => 'Codigo Venda',
            'linha1' => 'Linha1',
            'linha2' => 'Linha2',
            'linha3' => 'Linha3',
            'linha4' => 'Linha4',
            'linha5' => 'Linha5',
            'linha6' => 'Linha6',
            'linha7' => 'Linha7',
            'linha8' => 'Linha8',
            'linha9' => 'Linha9',
            'linha10' => 'Linha10',
            'total_venda' => 'Total Venda',
            'total_cliente_pagou' => 'Total Cliente Pagou',
            'troco' => 'Troco',
            'id_cliente' => 'Id Cliente',
        ];
    }
}
