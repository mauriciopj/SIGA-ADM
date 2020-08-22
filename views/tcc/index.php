<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TccSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title ='TCC - Trabalhos de Conclusão de Curso';
$this->params['breadcrumbs'][] = "TCC's";
?>
<div class="tcc-index box box-primary">

  <!--<h1><?// = Html::encode($this->title) ?></h1> -->
  <section class="content">
    <p>
      <?= Html::a('Adicionar um novo Trabalho (TCC)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
              ['class' => 'yii\grid\SerialColumn'],

              //'id',
              'tema',
              'titulo',

              [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Ações',
                'headerOptions' => ['width' => '70'],
                'template' => '{view} {update} {delete}{link}',
              ],
            ],
          ]); ?>
        </div>
      </div>
    </div>
  </section>

</div>
