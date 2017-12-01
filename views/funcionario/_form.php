<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\EmpresaModel;

/* @var $this yii\web\View */
/* @var $model app\models\FuncionarioModel */
/* @var $form yii\widgets\ActiveForm */
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<div class="funcionario-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Empresa_id')->dropDownList(
            ArrayHelper::map(EmpresaModel::find()->asArray()->all(), 'id', 'nome')
        ) ?>

    <?= $form->field($model, 'cep')->textInput(['maxlength' => true, 'onblur' => 'javascripts:getEndereco();'])?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bairro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</html>

<script>
    // Busca o endereço pelo CEP informado
    function getEndereco() {
        // Se o campo CEP não estiver vazio
        if($.trim($("#funcionariomodel-cep").val()) != ""){
            var url = "http://viacep.com.br/ws/"+$("#funcionariomodel-cep").val()+"/json/";
            $.getJSON(url, function(result){
                console.log(result['cep']);
                $("#funcionariomodel-endereco").val(unescape(result["logradouro"]));
                $("#funcionariomodel-bairro").val(unescape(result["bairro"]));
                $("#funcionariomodel-cidade").val(unescape(result["localidade"]));
                $("#funcionariomodel-estado").val(unescape(result["uf"]));
                $("#estado").focus();
            });
        }
    }
</script>
