<?php
/**
 * Created by PhpStorm.
 * User: 刘懿萱
 * Date: 2020/1/20
 * Time: 16:58
 */
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>主界面</title>
</head>

<body>
<div id="app">
  <div class="main-wrapper">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
          <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
        </ul>
      </form>
      <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">您好, 刘懿萱</div></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item has-icon">
              <i class="ion ion-log-out"></i> 登出
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="main-sidebar">
      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a href="index.html">最佳班级评选系统</a>
        </div>
        <div class="sidebar-user">
          <div class="sidebar-user-picture">
            <img alt="image" src="../dist/img/avatar/avatar-1.jpeg">
          </div>
          <div class="sidebar-user-details">
            <div class="user-name">刘懿萱</div>
            <div class="user-role">
              管理员
            </div>
          </div>
        </div>
        <ul class="sidebar-menu">
          <li class="menu-header">总体排名</li>
          <li class="active">
            <a href="index.html"><i class="ion ion-speedometer"></i><span>总体排名</span></a>
          </li>

          <li class="menu-header">必要条件</li>
          <li>
            <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>学分绩点</span></a>
            <ul class="menu-dropdown">
              <li><a href="general.html"><i class="ion ion-ios-circle-outline"></i>查看信息</a></li>
              <li><a href="components.html"><i class="ion ion-ios-circle-outline"></i>录入信息</a></li>
            </ul>
          </li>

          <li class="menu-header">参考条件</li>
          <li>
            <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i>德智体综合测评</a>
            <ul class="menu-dropdown">
              <li><a href="#"><i class="ion ion-ios-circle-outline"></i>查看信息</a></li>
              <li><a href="#"><i class="ion ion-ios-circle-outline"></i>录入信息</a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
    </div>
    <section class="section">
      <h1 class="section-header">
        <div>总体排名</div>
      </h1>
      <div class="row mt-5">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <p style="float: left;margin-right: 10px; padding-top:8px;">年级</p>
              <label for="grade"></label><select class="form-control" id="grade" name="grade" style="width: 200px;float: left;">
                <option value="">2017级</option>
                <option value="">2018级</option>
              </select>
              <button class="btn btn-primary" style="margin-top: 8px;margin-left: 8px;">查询</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" style="text-align: center;">
                  <tr>
                    <th>班级</th>
                    <th>评选资格</th>
                    <th>德智体综合测评</th>
                    <th>班级活动测评成绩</th>
                    <th>寝室测评成绩</th>
                    <th>出勤检查成绩</th>
                    <th>附加分</th>
                    <th>总成绩</th>
                  </tr>
                  <tr>
                    <td>软件1701班</td>
                    <td>√</td>
                    <td>82.2</td>
                    <td>28</td>
                    <td>6.99</td>
                    <td>4</td>
                    <td><a href="#">0</a></td>
                    <td>50.60</td>
                  </tr>
                  <tr>
                    <td>软件工程1709班</td>
                    <td>√</td>
                    <td>74.71</td>
                    <td>34</td>
                    <td>6.15</td>
                    <td>8</td>
                    <td><a href="#">0</a></td>
                    <td>48.97</td>
                  </tr>
                  <tr>
                    <td>软件1705班</td>
                    <td>√</td>
                    <td>75.36</td>
                    <td>28</td>
                    <td>7.69</td>
                    <td>8</td>
                    <td><a href="#">0</a></td>
                    <td>47.65</td>
                  </tr>
                  <tr>
                    <td>软件工程1705班</td>
                    <td>√</td>
                    <td>72.81</td>
                    <td>28</td>
                    <td>6.94</td>
                    <td>6</td>
                    <td><a href="#">0</a></td>
                    <td>46.10</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="footer-right"></div>
    <div>designed by lyx❤sly</div>
  </footer>
</div>
</body>
</html>
