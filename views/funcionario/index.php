<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuncionarioModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Funcionario';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funcionario-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Funcionario Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nome',
            'Empresa_id',
            'cep',
            'endereco',
            // 'bairro',
            // 'cidade',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
