<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Francisco Farley</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder=""/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'MENU PRINCIPAL', 'options' => ['class' => 'header']],
                    ['label' => 'Página Inicial', 'icon' => 'th', 'url' => ['/'], 'active' => Yii::$app->controller->id == 'site'],
                    ['label' => 'Eventos', 'icon' => 'dashboard', 'url' => ['/eventos'], 'active' => Yii::$app->controller->id == 'eventos'],
                    ['label' => 'AACC', 'icon' => 'circle-o', 'url' => ['/aacc'], 'active' => Yii::$app->controller->id == 'aacc'],
                    ['label' => 'TCC', 'icon' => 'circle-o', 'url' => ['/tcc'], 'active' => Yii::$app->controller->id == 'tcc'],
                    ['label' => 'Certificados', 'icon' => 'circle-o', 'url' => ['/certificado'], 'active' => Yii::$app->controller->id == 'certificado'],
                    //['label' => 'Informativos', 'icon' => 'circle-o', 'url' => ['login'], 'active' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Regulamentos',
                        'icon' => '',
                        'url' => '#',
                        'items' => [
                            ['label' => 'PPP - Projeto Pedagógico', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Regulamento AACC', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Regulamento Estágio',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Yii2',
                        'icon' => 'circle-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
