<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'SIGA-ADM | Login';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p>
          <img src="/img/ifnmg.png" alt="">
          <font size="06"><b>SIGA-ADM</b></font>
        </p><br>
        <p class="login-box-msg">
          <font size="03"><b>Sistema de Gestão de Atividades<br></font><font color="silver">Bacharelado em Administração</font></b><br><br>
          Preencha os campos para entrar
        </p>
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('usuario')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('senha')]) ?>

        <div class="row">
            <div class="col-xs-7">
                <!--<?= $form->field($model, 'rememberMe')->checkbox() ?>-->
                <a href="#">Esqueci a minha senha</a>
            </div>
            <!-- /.col -->
            <div class="col-xs-5 pull-right">
                <?= Html::submitButton('Fazer Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>

        <!--
        <div class="social-auth-links text-center">
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Entrar com o Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google"></i> Entrar com o Google</a>
        </div> -->
        <!-- /.social-auth-links -->

        <!--<a href="register.html" class="text-center">Acessando o sistema pela primeira vez</a>-->

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
