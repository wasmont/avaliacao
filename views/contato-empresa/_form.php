<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\EmpresaModel;
use app\models\ContatoModel;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoEmpresaModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contato-empresa-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Empresa_id')->dropDownList(
            ArrayHelper::map(EmpresaModel::find()->asArray()->all(), 'id', 'nome')
        )
     ?>

    <?= $form->field($model, 'Contato_id')->dropDownList(
            ArrayHelper::map(ContatoModel::find()->asArray()->all(), 'id', 'nome')
        )
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Associar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
