<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
//use yiister\gentelella\widgets\Menu;
use yii\widgets\Breadcrumbs;

?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] === 'true' ? 'sm' : 'md' ?>">
    <?php $this->beginBody(); ?>
    <div class="container body">

        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>


                    <br/>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <?/*= Menu::widget([
                                'items' => [
                                    [
                                        'label' => 'Home',
                                        'url' => '/admin',
                                        'icon' => 'home'
                                    ],
                                    [
                                        'label' => 'Оргструктура',
                                        'url' => '#',
                                        'icon' => 'object-ungroup',
                                        'items' => [
                                            [
                                                'label' => 'Сотрудники',
                                                'url' => '/admin/employees',
                                                'icon' => 'users'
                                            ],
                                            [
                                                'label' => 'Отделы',
                                                'url' => '/admin/departments',
                                                'icon' => 'briefcase'
                                            ],
                                            [
                                                'label' => 'Операторы',
                                                'url' => '/admin/users',
                                                'icon' => 'user-secret'
                                            ],
                                        ]
                                    ],
                                    [
                                        'label' => 'Правила уведомлений',
                                        'url' => '/admin/notification-rule',
                                        'icon' => 'briefcase'
                                    ],
                                    [
                                        'label' => 'Устройства',
                                        'url' => '#',
                                        'icon' => 'object-ungroup',
                                        'items' => [
                                            [
                                                'label' => 'Устройства',
                                                'url' => '/admin/devices',
                                                'icon' => 'users'
                                            ],
                                            [
                                                'label' => 'Конфигурации устройств',
                                                'url' => '/admin/devices-settings',
                                                'icon' => 'briefcase'
                                            ],
                                            [
                                                'label' => 'Прошивки устройств',
                                                'url' => '/admin/devices-firmwares',
                                                'icon' => 'briefcase'
                                            ]
                                        ]
                                    ],
                                    [
                                        'label' => 'Табель рабочего времени',
                                        'url' => '#',
                                        'icon' => 'calendar',
                                        'items' => [
                                            [
                                                'label' => 'Табель рабочего времени',
                                                'url' => '/admin/timesheet',
                                                'icon' => 'calendar'
                                            ],
                                            [
                                                'label' => 'Настройка времени опоздания и прогула',
                                                'url' => '/admin/working-time-settings',
                                                'icon' => 'gear'
                                            ],
                                        ]
                                    ],
                                    [
                                        'label' => 'Отчёт о рабочем времени',
                                        'url' => '/admin/work-time-report',
                                        'icon' => 'clock-o'
                                    ],
                                    [
                                        'label' => 'Средства индивидуальной защиты',
                                        'url' => '#',
                                        'icon' => 'fire-extinguisher',
                                        'items' => [
                                            [
                                                'label' => 'Список средств индивидуальной защиты',
                                                'url' => '/admin/ppe/equipments',
                                                'icon' => 'list-ul'
                                            ],
                                            [
                                                'label' => 'Наборы',
                                                'url' => '/admin/ppe/sets',
                                                'icon' => 'archive'
                                            ],
                                            [
                                                'label' => 'Типы',
                                                'url' => '/admin/ppe/types',
                                                'icon' => 'cubes'
                                            ],
                                        ]
                                    ],
                                    [
                                        'label' => 'Звуковые оповещения',
                                        'url' => '#',
                                        'icon' => 'volume-up',
                                        'items' => [
                                            [
                                                'label' => 'Звуковые оповещения',
                                                'url' => '/admin/device-notifications',
                                                'icon' => 'volume-up'
                                            ],
                                            [
                                                'label' => 'Статусы',
                                                'url' => '/admin/device-notifications-statuses',
                                                'icon' => 'check'
                                            ],
                                        ]
                                    ],
                                    [
                                        'label' => 'Географические объекты',
                                        'url' => '/admin/geoobjects',
                                        'icon' => 'map-marker'
                                    ],
                                    [
                                        'label' => 'Тестирование',
                                        'url' => '#',
                                        'icon' => 'list-alt',
                                        'items' => [
                                            [
                                                'label' => 'Аварийное',
                                                'url' => '/admin/emergency',
                                                'icon' => 'asterisk'
                                            ],
                                        ]
                                    ],
                                ]
                            ]) */?>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= \yii\helpers\Url::to('/site/logout') ?>" data-method="post">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    Humanplus
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="clearfix"></div>
                <h4><?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], ]); ?></h4>
                <?= $content ?>
            </div>
            <!-- /page content -->

        </div>

    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>