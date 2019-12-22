<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AaccSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title ='Atividades Acadêmicas Científicas Culturais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aacc-index">

    <!--<h1><?// = Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Nova Atividade', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'titulo',
            'descricao',
            'tipo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
