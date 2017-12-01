<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CorrespondenciaModel */

$this->title = 'Create Correspondencia';
$this->params['breadcrumbs'][] = ['label' => 'Correspondencia Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correspondencia-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
