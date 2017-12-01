<?php

namespace app\controllers;

use Yii;
use app\models\ContatoEmpresaModel;
use app\models\ContatoEmpresaModelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContatoEmpresaController implements the CRUD actions for ContatoEmpresaModel model.
 */
class ContatoEmpresaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ContatoEmpresaModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContatoEmpresaModelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ContatoEmpresaModel model.
     * @param string $Contato_id
     * @param string $Empresa_id
     * @return mixed
     */
    public function actionView($Contato_id, $Empresa_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Contato_id, $Empresa_id),
        ]);
    }

    /**
     * Creates a new ContatoEmpresaModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ContatoEmpresaModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Contato_id' => $model->Contato_id, 'Empresa_id' => $model->Empresa_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ContatoEmpresaModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Contato_id
     * @param string $Empresa_id
     * @return mixed
     */
    public function actionUpdate($Contato_id, $Empresa_id)
    {
        $model = $this->findModel($Contato_id, $Empresa_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Contato_id' => $model->Contato_id, 'Empresa_id' => $model->Empresa_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ContatoEmpresaModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Contato_id
     * @param string $Empresa_id
     * @return mixed
     */
    public function actionDelete($Contato_id, $Empresa_id)
    {
        $this->findModel($Contato_id, $Empresa_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ContatoEmpresaModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Contato_id
     * @param string $Empresa_id
     * @return ContatoEmpresaModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Contato_id, $Empresa_id)
    {
        if (($model = ContatoEmpresaModel::findOne(['Contato_id' => $Contato_id, 'Empresa_id' => $Empresa_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
