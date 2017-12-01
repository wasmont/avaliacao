<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "proccess".
 *
 * @property string $id
 * @property integer $codflow
 * @property string $proccess
 * @property string $description
 */
class ProccessModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proccess';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codflow'], 'integer'],
            [['description'], 'string'],
            [['proccess'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'codflow' => 'Codflow',
            'proccess' => 'Proccess',
            'description' => 'Description',
        ];
    }

    public function GerarRegistros(){
        $resultado = \Yii::$app->db->createCommand("CALL new_proccess")->execute();
        if($resultado)
            return 1;
    }

    public function ListarProccess(){
        $resultado = \Yii::$app->db->createCommand("CALL list_proccess")->queryAll();
        if($resultado)
            return $resultado;
    }

    public function search($params)
    {
        $query = ProccessModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'codflow' => $this->codflow,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'codflow', $this->codflow])
            ->andFilterWhere(['like', 'proccess', $this->proccess])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
