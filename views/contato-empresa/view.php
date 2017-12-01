<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoEmpresaModel */

$this->title = $model->Contato_id;
$this->params['breadcrumbs'][] = ['label' => 'Contato Empresa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contato-empresa-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Contato_id' => $model->Contato_id, 'Empresa_id' => $model->Empresa_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Contato_id' => $model->Contato_id, 'Empresa_id' => $model->Empresa_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Contato_id',
            'Empresa_id',
        ],
    ]) ?>

</div>
