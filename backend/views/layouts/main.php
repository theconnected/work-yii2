<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="fixed-leftside fixed-header">
        <?php $this->beginBody() ?>
        <header>
            <a href="<?= Url::base(); ?>/books" class="logo"><i class="fa fa-skyatlas"></i> <span>Maniac</span></a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="navbar-btn sidebar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-header">
                    <ul class="nav navbar-nav pull-left">
                        <li><a href="#"><i class="ion-arrow-expand"></i></a></li>
                        <li class="dropdown dropdown-inverse">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ion-plus-round"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= Url::base() . '/books/create'?>"><i class="ion-compose"></i> เพิ่มหนังสือ</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-box">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ion-chatbox"></i>
                                <span class="label bg-green-500 label-rounded">&nbsp;</span>
                            </a>
                        </li>

                        <li class="dropdown dropdown-box dropdown-notifications">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ion-earth"></i><span class="label bg-orange-500 label-rounded">&nbsp;</span>
                            </a>
                        </li>
                        <li class="dropdown dropdown-box dropdown-tasks">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ion-android-list"></i><span class="label bg-red-500 label-rounded">&nbsp;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper">
            <!-- BEGIN LEFTSIDE -->
            <div class="leftside">
                <div class="sidebar">
                    <!-- BEGIN RPOFILE -->
                    <div class="nav-profile">
                        <div class="thumb">
                            <img src="<?= Url::base() ?>/img/avatar.jpg" class="img-circle" alt="" />
                            <span class="label label-info label-rounded">3</span>
                        </div>
                        <div class="info">
                            <a href="#"><i class="fa fa-user"></i> <?= Yii::$app->user->identity->username; ?></a>
                            <ul class="tools list-inline">
                                <li class="nav-dropdown">
                                    <a href="#" data-toggle="tooltip" title="ตั้งค่า"><i class="ion-gear-a"></i></a>
                                </li>
                                <li><a href="#" data-toggle="tooltip" title="อีเวนท์"><i class="ion-earth"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="ดาวน์โหลด"><i class="ion-archive"></i></a></li>
                            </ul>
                        </div>
                        <a href="<?=  Url::to(['site/logout'])?>" class="button"><i class="ion-log-out"></i></a>
                    </div>
                    <!-- END RPOFILE -->
                    <!-- BEGIN NAV -->
                    <div class="title">Navigation</div>
                    <ul class="nav-sidebar">
                        <li class="active">
                            <a href="<?= Url::base() . '/books' ?>">
                                <i class="fa fa-slack"></i> <span>รายการหนังสือ</span>
                            </a>
                        </li>
                        <li class="nav-dropdown">
                            <a href="#">
                                <i class="fa fa-stack-overflow"></i> <span>รายงาน</span>
                                <i class="ion-chevron-right pull-right"></i>
                            </a>
                            <ul>
                                <li><a href="<?= Url::base() . '/books/book-order' ?>">รายงานหนังสือขายดี</a></li>
                                <li><a href="<?= Url::base() . '/books/book-all' ?>">รายงานการสั่งซื้อทั้งหมด</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rightside bg-grey-100">
                <!-- BEGIN PAGE HEADING -->
                <div class="page-head bg-grey-100">
                    <h1 class="page-title"><?= $this->title; ?><small>welcome to book administration</small></h1>

                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>
                </div>
                <!-- END PAGE HEADING -->

                <div class="container-fluid">
                    <div class='row'>
                        <div class="col-lg-12">
                            <?= $content; ?>
                        </div>
                    </div>

                <footer class="bg-white">
                    <div class="pull-left">
                        <span class="pull-left margin-right-15">&copy; 2017 Book System.</span>
                        <ul class="list-inline pull-left">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
