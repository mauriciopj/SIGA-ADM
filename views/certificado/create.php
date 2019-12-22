<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Certificado */

$this->title = 'Novo Certificado';
$this->params['breadcrumbs'][] = ['label' => 'Certificados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificado-create">

    <!--<h1><?// = Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
