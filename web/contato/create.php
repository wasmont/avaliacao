<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ContatoModel */

$this->title = 'Create Contato';
$this->params['breadcrumbs'][] = ['label' => 'Contato Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contato-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
