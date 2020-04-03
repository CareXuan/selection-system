<<<<<<< HEAD
<?php
use app\models\NavBar;
use app\models\User;
use app\models\Role;

$arr = NavBar::find()->where(['p_id' => 0])->asArray()->all();
$user_name = empty($_COOKIE['user_name'])?'请先登录':$_COOKIE['user_name'];

if ($user_name != '请先登录'){
    $user = User::getByUserName($user_name);
    $role_id = $user->role_id;
    $role_name = Role::getById($role_id)->role_name;
}else{
    $role_name = '';
}

?>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">后台管理系统</a>
=======
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">最佳班级评选系统</a>
>>>>>>> 914bc45e5441a8b100c4540fbad8d3b6de4a5dbd
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
            </div>
            <div class="sidebar-user-details" style="text-align: center;">
<<<<<<< HEAD
                <div class="user-name"><?php echo $user_name; ?></div>
                <div class="user-role">
                    <?php echo $role_name;?>
=======
                <div class="user-name">刘懿萱</div>
                <div class="user-role">
                    管理员
>>>>>>> 914bc45e5441a8b100c4540fbad8d3b6de4a5dbd
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
<<<<<<< HEAD
            <?php
            foreach ($arr as $val){
                $content_data = NavBar::find()->where(['p_id' => $val['id']])->asArray()->all();
                ?>
                <li>
                    <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span><?php echo $val['nav_bar_name']; ?></span></a>
                    <ul class="menu-dropdown">
                        <?php
                        foreach ($content_data as $content_val){
                            ?>
                            <li><a href="<?php echo $content_val['href'];?>"><i class="ion ion-clipboard"></i><span><?php echo $content_val['nav_bar_name'];?></span></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
            <?php
            }
            ?>

=======
            <li class="menu-header">总体排名</li>
            <li>
                <a href="index.html"><i class="ion ion-speedometer"></i><span>总体排名</span></a>
            </li>

            <li class="menu-header">必要条件</li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Components</span></a>
                <ul class="menu-dropdown">
                    <li><a href="general.html"><i class="ion ion-ios-circle-outline"></i> Basic</a></li>
                    <li><a href="components.html"><i class="ion ion-ios-circle-outline"></i> Main Components</a></li>
                    <li><a href="buttons.html"><i class="ion ion-ios-circle-outline"></i> Buttons</a></li>
                    <li><a href="toastr.html"><i class="ion ion-ios-circle-outline"></i> Toastr</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Icons</span></a>
                <ul class="menu-dropdown">
                    <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i> Ion Icons</a></li>
                    <li><a href="fontawesome.html"><i class="ion ion-ios-circle-outline"></i> Font Awesome</a></li>
                    <li><a href="flag.html"><i class="ion ion-ios-circle-outline"></i> Flag</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="table.html"><i class="ion ion-clipboard"></i><span>Tables</span></a>
            </li>
            <li>
                <a href="chartjs.html"><i class="ion ion-stats-bars"></i><span>Chart.js</span></a>
            </li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
                <ul class="menu-dropdown">
                    <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                    <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                    <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                    <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                    <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
                </ul>
            </li>

            <li class="menu-header">参考条件</li>
            <li>
                <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
                <ul class="menu-dropdown">
                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                    <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                        <ul class="menu-dropdown">
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                            <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                                <ul class="menu-dropdown">
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                    <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-header">待审核信息</li>
            <li>
                <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
            </li>
>>>>>>> 914bc45e5441a8b100c4540fbad8d3b6de4a5dbd
        </ul>
    </aside>
</div>