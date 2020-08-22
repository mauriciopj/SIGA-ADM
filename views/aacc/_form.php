<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aacc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aacc-form box box-primary">
  <!-- Main content -->
  <?php $form = ActiveForm::begin(); ?>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box-header with-border">
          <h3 class="box-title">Preencha os campos abaixo com os dados da Atividade:</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">

              <!-- <?= $form->field($model, 'id')->textInput() ?>-->

              <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

              <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

              <?= $form->field($model, 'tipo')->textInput(['maxlength' => true]) ?>

            </div>
          </div>
          <div class="box-footer">
            <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
            <?= Html::button('Cancelar', ['class' => 'btn btn-danger']) ?>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php ActiveForm::end(); ?>

</div>
