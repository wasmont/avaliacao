<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CorrespondenciaModel */

$this->title = 'Update Correspondencia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Correspondencia Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="correspondencia-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
