<?php

use yii\helpers\Html;
//keraksiz narsalarni dumi tugildi
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=\yii\helpers\Url::home()?>" class="nav-link">Вернуться на главную страницу сайта</a>
        </li>
        <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Сменить пароль</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li> <a href="<?= \yii\helpers\Url::to(['admin/change-password']) ?>" class="btn btn-default btn-flat">Сменить пароль</a></li>
                <li><?= Html::a('Выйти', ['/admin/auth/logout'], ['data-method' => 'post', 'class' => 'dropdown-item']) ?></li>

                <!-- Level two dropdown-->
               
                <!-- End Level two -->
            </ul>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
       

        <!-- Messages Dropdown Menu -->
      
        <!-- Notifications Dropdown Menu -->
        
        </li>
        <li class="nav-item">
            <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['/admin/auth/logout'], ['data-method' => 'post', 'class' => 'nav-link', 'title'=> 'Выйти']) ?>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i title="Полный экран" class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li> -->
    </ul>
</nav>
<!-- /.navbar -->