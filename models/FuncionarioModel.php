<?php

namespace app\models;

use Yii;
use app\models\EmpresaModel;
/**
 * This is the model class for table "funcionario".
 *
 * @property string $id
 * @property string $Empresa_id
 * @property string $nome
 * @property string $cep
 * @property string $endereco
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 *
 * @property Empresa $empresa
 */
class FuncionarioModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Empresa_id'], 'required'],
            [['Empresa_id'], 'integer'],
            [['nome', 'bairro', 'cidade', 'estado'], 'string', 'max' => 80],
            [['cep'], 'string', 'max' => 100],
            [['endereco'], 'string', 'max' => 200],
            // [['Empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['Empresa_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Empresa_id' => 'Empresa',
            'nome' => 'Nome',
            'cep' => 'Cep',
            'endereco' => 'Endereco',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id' => 'Empresa_id']);
    }
}
