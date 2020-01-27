<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');

$this->title = 'Mensagens - Chat';
$this->params['breadcrumbs'][] = ['label' => "Chat"];
?>
<div class="chat-index box box-primary">
  <section class="content">
    <div class="row">
        <div class="col-md-8">
          <div class="box box-link box-solid direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contatos do Chat</h3>
            </div>
            <!-- Contacts are loaded here -->
            <div class="direct-chat">
              <ul class="contacts-list">
                <li>
                  <a href="#">
                    <img class="contacts-list-img" src="<?= $directoryAsset ?>/img/user4-128x128.jpg" alt="Count Dracula">

                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Count Dracula
                        <small class="contacts-list-date pull-right">
                          28 de jan, 2020
                          <a href=""><i class="fa fa-circle text-success"></i> Online</a>
                        </small>
                      </span>
                      <span class="contacts-list-msg">Como você tem estado? Eu fui...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
              </ul>
              <!-- /.contatcts-list -->
            </div>
            <!-- /.direct-chat-pane -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="col-md-4">
          <!-- DIRECT CHAT PRIMARY -->
          <div class="box box-primary box-solid direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sarah Bullock</h3>

              <div class="box-tools pull-right">
                <span data-toggle="tooltip" title="3 Novas Mensagens" class="badge bg-light-blue">3</span>
                <!--
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                -->
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="<?= $directoryAsset ?>/img/user2-160x160.jpg" alt="Francisco Farley"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Este modelo é realmente grátis? Isso é inacreditavel!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-info -->
                  <img class="direct-chat-img" src="<?= $directoryAsset ?>/img/user3-128x128.jpg" alt="Sarah Bullock"><!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    É melhor você acreditar!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
              </div>
              <!--/.direct-chat-messages-->
              <div class="box-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Digite aqui..." class="form-control">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-primary btn-flat">Enviar</button>
                        </span>
                  </div>
                </form>
              </div>
              <!-- /.box-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <!-- /.col -->
        </div>
    </div>
  </section>
</div>
