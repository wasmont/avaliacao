<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ContatoModel;
use yii\widgets\MaskedInput;


/* @var $this yii\web\View */
/* @var $model app\models\CorrespondenciaModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correspondencia-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Contato_id')->dropDownList(
            ArrayHelper::map(ContatoModel::find()->asArray()->all(), 'id', 'nome')
        )
    ?>

    <?= $form->field($model, 'datahora')->textInput()->widget(\yii\widgets\MaskedInput::className(), [
            'clientOptions' => ['alias' =>  'yyyy-mm-dd'],
        ]);
     ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
