<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Easy to Learn - Avaliação - Washington Monteiro',
        'brandUrl' => ['/contato/index'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/contato/index']],

            ['label' => 'Criar Contatos', 'url' => ['/contato/create']],
            ['label' => 'Gerar Registros', 'url' => ['/proccess/index']],
            ['label' => 'Cadastros', 'options' => ['class' => 'treeview-menu'], 'items' => [
                ['label' => 'Empresa', 'url' => ['/empresa/index']],
                ['label' => 'Funcionario', 'url' => ['/funcionario/index']],
                ['label' => 'Correspondência', 'url' => ['/correspondencia/index']],
                ['label' => 'Associar Contato da Empresa', 'url' => ['/contato-empresa/index']],
                ],
            ],
            ['label' => 'Relatório Correspondências', 'url' => ['/correspondencia/relatorio']],

            ['label' => 'Banco', 'options' => ['class' => 'treeview-menu'], 'items' => [
                ['label' => 'Modelo do D.B.', 'url' => ['/contato/modelo']],
                ],
            ],

        ]
    ]);
    NavBar::end();
    ?>

    <div class="container">
      <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
