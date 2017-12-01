<?php

namespace app\models;

use Yii;
use app\models\ContatoModel;
use app\models\EmpresaModel;

/**
 * This is the model class for table "contato_empresa".
 *
 * @property string $Contato_id
 * @property string $Empresa_id
 *
 * @property Contato $contato
 * @property Empresa $empresa
 */
class ContatoEmpresaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contato_empresa';
    }

    public static function primaryKey()
    {
       return ['Contato_id','Empresa_id'];
    }

    public function getPrimaryKey( $asArray = false )
    {
        return ['Contato_id','Empresa_id'];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Contato_id', 'Empresa_id'], 'required'],
            [['Contato_id', 'Empresa_id'], 'integer'],
            // [['Contato_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contato::className(), 'targetAttribute' => ['Contato_id' => 'id']],
            // [['Empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['Empresa_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Contato_id' => 'Contato',
            'Empresa_id' => 'Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContato()
    {
        return $this->hasOne(Contato::className(), ['id' => 'Contato_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id' => 'Empresa_id']);
    }
}
