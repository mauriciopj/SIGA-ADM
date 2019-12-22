<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TccSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title ='Trabalhos de Conclusão de Curso';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcc-index">

    <!--<h1><?// = Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Novo Trabalho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'tema',
            'titulo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
