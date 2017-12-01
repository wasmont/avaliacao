<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

?>
<h1>Gerar Registros - Proccess Table</h1>

<p><a class="btn btn-lg btn-success" href="javascript:GerarNovosRegistros();">Gerar 14 registros novos</a></p>
<br><br>
<center><b><p id="resultarea" style="font-size: 16px"></p></b></center>
<br>
<p>Listagem de registros em Proccess:<p><br>
<div class="contato-model-view">
    <?php Pjax::begin(['id' => 'pjax-grid-view']); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                // 'id',
                'codflow',
                'proccess',
                'description',
                // ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
</div>

<script>

    function GerarNovosRegistros(){
        $.ajax({
          type: "GET",
          url: "index.php?r=proccess/gerar-registros",
          // data: ,
          cache: false,
          success: function(data){
             $("#resultarea").text(data);
             $.pjax({container: '#pjax-grid-view'});
          }
        });
    }

</script>
