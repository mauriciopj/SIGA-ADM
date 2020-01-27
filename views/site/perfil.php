<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title ="Perfil";
$this->params['breadcrumbs'][] = "Perfil";

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');

?>
<div class="perfil-index box box-primary">
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-9" align-items="center">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-aqua-active">
            <h3 class="widget-user-username">Francisco Farley</h3>
            <h5 class="widget-user-desc">Coordenador do curso de Bacharelado em Administração <br>&amp; Professor</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle" src="<?= $directoryAsset ?>/img/user2-160x160.jpg" alt="User Avatar">
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">3,200</h5>
                  <span class="description-text">SALES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">13,000</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">35</h5>
                  <span class="description-text">PRODUCTS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <!-- /.col -->
    </div>
  </section>
</div>
