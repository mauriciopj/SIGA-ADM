<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aacc */

$this->title = 'Atividades Acadêmicas Científicas Culturais';
$this->params['breadcrumbs'][] = ['label' => "AACC's", 'url' => ['index']];
$this->params['breadcrumbs'][] = "Visualização da Atividade";
\yii\web\YiiAsset::register($this);
?>
<div class="aacc-view box box-primary">

    <!--<h1><?//= Html::encode($this->title) ?></h1>-->
  <div class="container-fluid content">
    <div class="row">
      <div class="col-md-12">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'titulo',
                'descricao',
                'tipo',
            ],
        ]) ?>
        <p>
            <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Tem certeza de que deseja excluir?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
      </div>
    </div>
  </div>
</div>
