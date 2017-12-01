<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContatoEmpresaModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contato Empresa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contato-empresa-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contato Empresa Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Contato_id',
            'Empresa_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
