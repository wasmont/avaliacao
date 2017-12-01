<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ContatoEmpresaModel */

$this->title = 'Associar Contato Empresa';
$this->params['breadcrumbs'][] = ['label' => 'Contato Empresa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contato-empresa-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
