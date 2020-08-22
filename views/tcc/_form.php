<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tcc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tcc-form box box-primary">
  <!-- Main content -->
  <?php $form = ActiveForm::begin(); ?>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box-header with-border">
          <h3 class="box-title">Insira os dados do novo Trabalho de Conclusão de Curso:</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">

              <!-- <?= $form->field($model, 'id')->textInput() ?>-->

              <?= $form->field($model, 'tema')->textInput(['maxlength' => true]) ?>

              <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

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
