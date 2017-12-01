<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property string $id
 * @property string $nome
 * @property string $cnpj
 *
 * @property ContatoEmpresa[] $contatoEmpresas
 */
class EmpresaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 100],
            [['cnpj'], 'string', 'max' => 40],
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
            'cnpj' => 'Cnpj',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContatoEmpresas()
    {
        return $this->hasMany(ContatoEmpresa::className(), ['Empresa_id' => 'id']);
    }
}
