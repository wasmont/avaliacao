<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EmpresaModel */

$this->title = 'Adicionar Empresa';
$this->params['breadcrumbs'][] = ['label' => 'Empresa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
