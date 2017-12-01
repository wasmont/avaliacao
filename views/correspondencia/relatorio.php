<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CorrespondenciaModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relatório das Correspondencias - Filtro (sobrenome Silva)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="imprimir">
<p>
    <b>Relatório das Correspondências</b> - Filtro (sobrenome <b>Silva</b>)
</p>
<br>
    <!-- <div class="form-group">
      <label for="sobrenome"><b>Procurar outro sobrenome: </b></label>
      <input type="text" class="form-control" id="sobrenom" name="sobrenome" style="width:300px;font-size: 13px" >
  </div> <button type="button" class="btn btn-primary">Procurar</button> -->
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CORRESPONDENCIA</th>
      <th scope="col">CONTATO</th>
      <th scope="col">EMPRESA</th>
      <th scope="col">CNPJ</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">CELULAR</th>
    </tr>
  </thead>
  <tbody id="tabelaboot">
    <?php
        foreach ($relatorio as $key => $value):
            echo'
                <tr>
                  <th scope="row">'.$value['ID'].'</th>
                  <td>'.$value['CORRESPONDENCIA'].'</td>
                  <td>'.$value['CONTATO'].'</td>
                  <td>'.$value['EMPRESA'].'</td>
                  <td>'.$value['CNPJ'].'</td>
                  <td>'.$value['EMAIL'].'</td>
                  <td>'.$value['TELEFONE'].'</td>
                  <td>'.$value['CELULAR'].'</td>
                </tr>
            ';
        endforeach;
    ?>
  </tbody>
</table>
</div>
<button type="button" class="btn btn-primary" onclick="printDiv('imprimir')" align="right">Imprimir</button>

<script>
    function printDiv(divName) {
         var printContents = document.getElementById(divName).innerHTML;
         var originalContents = document.body.innerHTML;

         document.body.innerHTML = printContents;

         window.print();

         document.body.innerHTML = originalContents;
    }
</script>

<!-- <style>
    .form-group{
        display: inline-block;
    }
<style> -->
