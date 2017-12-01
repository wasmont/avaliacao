<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoModel */
/* @var $form yii\widgets\ActiveForm */
?>
<script>
    function jsfunction(){
        var $inputs = $('#w0 :input');
        var values = {};
        $inputs.each(function() {
            values[this.id] = $(this).val()+'';
        });
        values = JSON.stringify(values);
        alert("Mostrando todos os valores de todos os campos do formulario: "+values);
    }
</script>

<div class="contato-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sobrenome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nascimento')->textInput(['maxlength' => true])
        ->widget(\yii\widgets\MaskedInput::className(), [
            'clientOptions' => ['alias' =>  'yyyy-mm-dd'],
        ]);
    ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])
        ->widget(\yii\widgets\MaskedInput::className(), [
            'clientOptions' => [
                'alias' =>  'email'
            ],
        ]);
    ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true])
        ->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '(99) 99999-9999',
        ]);
     ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => true])
        ->widget(\yii\widgets\MaskedInput::className(), [
            'mask' => '(99) 99999-9999',
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','onclick' => 'jsfunction()']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
