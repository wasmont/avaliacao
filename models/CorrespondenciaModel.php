<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "correspondencia".
 *
 * @property string $id
 * @property string $Contato_id
 * @property string $datahora
 *
 * @property Contato $contato
 */
class CorrespondenciaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'correspondencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Contato_id'], 'required'],
            [['Contato_id'], 'integer'],
            [['datahora'], 'safe'],
            // [['Contato_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contato::className(), 'targetAttribute' => ['Contato_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Contato_id' => 'Contato ID',
            'datahora' => 'Datahora',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContato()
    {
        return $this->hasOne(Contato::className(), ['id' => 'Contato_id']);
    }

    public function Relatorio($sobrenome){
        if($sobrenome==null)
            $query = "  select a.id as id, b.nome as correspondencia, concat( b.nome,' ',b.sobrenome) as contato, d.nome as empresa,
                        d.cnpj as cnpj, b.email as email, b.telefone as telefone, b.celular as celular
                        	from correspondencia a
                        inner join contato b
                        	on a.contato_id = b.id
                        inner join contato_empresa c
                        	on c.contato_id = b.id
                        inner join empresa d
                        	on c.empresa_id = d.id
                        where sobrenome like '%Silva%' ";
        else
            $query = "  select a.id as id, b.nome as correspondencia, concat( b.nome,' ',b.sobrenome) as contato, d.nome as empresa,
                        d.cnpj as cnpj, b.email as email, b.telefone as telefone, b.celular as celular
                        	from correspondencia a
                        inner join contato b
                        	on a.contato_id = b.id
                        inner join contato_empresa c
                        	on c.contato_id = b.id
                        inner join empresa d
                        	on c.empresa_id = d.id
                        where sobrenome like '%".$sobrenome."%'";

        $connection = \Yii::$app->db;
        $command = $connection->createCommand($query);
        $reader = $command->query();
        return $reader->readAll();
    }


}
