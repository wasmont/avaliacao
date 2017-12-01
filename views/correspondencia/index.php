<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CorrespondenciaModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Correspondencia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correspondencia-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Correspondencia Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Contato_id',
            'datahora',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
