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
            [['Contato_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contato::className(), 'targetAttribute' => ['Contato_id' => 'id']],
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
            $query = "  SELECT A.ID AS ID, B.NOME AS CORRESPONDENCIA, CONCAT( B.NOME,' ',B.SOBRENOME) AS CONTATO, D.NOME AS EMPRESA,
                        D.CNPJ AS CNPJ, B.EMAIL AS EMAIL, B.TELEFONE AS TELEFONE, B.CELULAR AS CELULAR
                        	FROM CORRESPONDENCIA A
                        INNER JOIN CONTATO B
                        	ON A.Contato_id = B.id
                        INNER JOIN CONTATO_EMPRESA C
                        	ON C.Contato_id = B.id
                        INNER JOIN EMPRESA D
                        	ON C.Empresa_id = D.id
                        WHERE SOBRENOME LIKE '%Silva%' ";
        else
            $query = "  SELECT A.ID AS ID, B.NOME AS CORRESPONDENCIA, CONCAT( B.NOME,' ',B.SOBRENOME) AS CONTATO, D.NOME AS EMPRESA,
                        D.CNPJ AS CNPJ, B.EMAIL AS EMAIL, B.TELEFONE AS TELEFONE, B.CELULAR AS CELULAR
                        	FROM CORRESPONDENCIA A
                        INNER JOIN CONTATO B
                        	ON A.Contato_id = B.id
                        INNER JOIN CONTATO_EMPRESA C
                        	ON C.Contato_id = B.id
                        INNER JOIN EMPRESA D
                        	ON C.Empresa_id = D.id
                        WHERE SOBRENOME LIKE '%".$sobrenome."%'";

        $connection = \Yii::$app->db;
        $command = $connection->createCommand($query);
        $reader = $command->query();
        return $reader->readAll();
    }


}
