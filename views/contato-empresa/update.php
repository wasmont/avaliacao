<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoEmpresaModel */

$this->title = 'Update Contato: ' . $model->Contato_id;
$this->params['breadcrumbs'][] = ['label' => 'Contato Empresa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Contato_id, 'url' => ['view', 'Contato_id' => $model->Contato_id, 'Empresa_id' => $model->Empresa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contato-empresa-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
