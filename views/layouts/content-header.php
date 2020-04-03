<!-- Created by PhpStorm.-->
<!-- User: 刘懿萱-->
<!-- Date: 2020/1/21-->
<!-- Time: 11:42-->

<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li <?php if (!empty($_COOKIE['user_name']))echo 'class="dropdown">';?><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                <i class="ion ion-android-person d-lg-none"></i>
                <div class="d-sm-none d-lg-inline-block">您好，<?php echo empty($_COOKIE['user_name'])?'请先登录':$_COOKIE['user_name'];?></div></a>
            <?php if (!empty($_COOKIE['user_name'])){
                ?>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/user/logout" class="dropdown-item has-icon">
                        <i class="ion ion-log-out"></i> 登出
                    </a>
                </div>
            <?php
            }?>
        </li>
    </ul>
</nav>