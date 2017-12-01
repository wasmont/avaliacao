<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property string $id
 * @property string $nome
 * @property string $sobrenome
 * @property string $nascimento
 * @property string $email
 *
 * @property ContatoEmpresa[] $contatoEmpresas
 * @property Correspondencia[] $correspondencias
 */
class ContatoModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contato';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nascimento'], 'safe'],
            [['nome', 'sobrenome', 'email','telefone','celular'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'sobrenome' => 'Sobrenome',
            'nascimento' => 'Nascimento',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'celular' => 'Celular',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContatoEmpresas()
    {
        return $this->hasMany(ContatoEmpresa::className(), ['Contato_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCorrespondencias()
    {
        return $this->hasMany(Correspondencia::className(), ['Contato_id' => 'id']);
    }
}
