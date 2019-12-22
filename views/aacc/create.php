<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aacc */

$this->title = 'Nova Atividade';
$this->params['breadcrumbs'][] = ['label' => 'AACCs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aacc-create">

    <!--<h1><?// = Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

