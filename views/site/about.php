<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Sobre';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about box box-primary">
  <div class="content">
    <div class="jumbotron" style="width: 100%; height: 190px;">
      <h1>SIGA-ADM</h1>

      <p class="lead">
        <b>Si</b>stema de <b>G</b>estão de <b>A</b>tividades do curso <br>
        <i>(Bacharelado em Administração)</i>
      </p>
    </div>

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <!--
    <div class="jumbotron" style="background-image: url('/img/logoADM.png'); background-repeat: no-repeat; background-position: 03%;">
      <h1>#Bem-vindo!</h1>

      <p class="lead">Para acessar o sistema, você deverá realizar o seu registro primeiro.</p>

      <p><a class="btn btn-lg btn-info" href="http://www.yiiframework.com">Registrar-me</a></p>
    </div>-->

    <div class="row">
      <div class="col-lg-4">
        <div class="box box-secondary">
          <div class="box-header with-border">
            <h3>O que devo saber?</h3>

            <p align="justify">
              O SIGA-ADM é um sistema desenvolvido especialmente para o gerenciamento das atividades do curso Bacharelado em Administração.
            </p><br>
            <p align="left"><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Mais informações &raquo;</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="box box-secondary">
          <div class="box-header with-border">
            <h3>Acesso ao sistema</h3>

            <p align="justify">O acesso está liberado ao coordenador, professores e alunos.
              Os alunos deverão validar os seus registros para acessar o sistema.
              As crendenciais para o login seguem o mesmo padrão do CAJUI.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="box box-secondary">
          <div class="box-header with-border">
            <h3>Funcionalidades</h3>

            <p align="justify"><b>Entre as funcionalidades principais, estão:</b><br>
              * Expansivo Quadro de Horários;<br>
              * Registro de Orientações de Atividades dos alunos;<br>
              * Gerenciamento de AACC's;<br>
              * Gerenciamento de TCC's;<br>
              * Integração com o SGE (Gerenciamento de Estágios);<br>
              * Entre outras;
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!--<code><?= __FILE__ ?></code>-->
</div>
