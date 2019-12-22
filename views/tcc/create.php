<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tcc */

$this->title = 'Novo Trabalho';
$this->params['breadcrumbs'][] = ['label' => 'TCCs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcc-create">

    <!--<h1><?// = Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
