<?php

namespace app\controllers;

use Yii;
use app\models\ProccessModel;

class ProccessController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new ProccessModel();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        // $resultado = $model->ListarProccess();
        // return $this->render('index',['lista'=>$resultado]);
    }

    public function actionGerarRegistros()
    {
        $model = new ProccessModel();
        $resultado = $model->GerarRegistros();

        if($resultado==1)
            return ('Os registros foram gerados!');
        else
            return ('Erro ao tentar gerar novos registros!');
    }

}
