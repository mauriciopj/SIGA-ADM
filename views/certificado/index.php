<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CertificadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title ='Certificados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificados-index">

    <!--<h1><?// = Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Novo Certificado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'tamanho',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
