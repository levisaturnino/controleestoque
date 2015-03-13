<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $id_cli
 * @property string $id_user
 * @property string $nome_cli
 * @property string $endereco_cli
 * @property string $cidade_cli
 * @property string $uf_cli
 * @property string $email_cli
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome_cli', 'endereco_cli', 'cidade_cli', 'uf_cli', 'email_cli'], 'required'],
            [['id_user', 'nome_cli', 'endereco_cli', 'cidade_cli', 'uf_cli', 'email_cli'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cli' => 'Id Cli',
         
            'nome_cli' => 'Nome',
            'endereco_cli' => 'Endereço',
            'cidade_cli' => 'Cidade',
            'uf_cli' => 'UF',
            'email_cli' => 'Email',
        ];
    }
}
