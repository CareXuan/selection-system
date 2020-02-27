<?php
use app\models\NavBar;

$arr = NavBar::find()->where(['p_id' => 0])->asArray()->all();

?>
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">后台管理系统</a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
            </div>
            <div class="sidebar-user-details" style="text-align: center;">
                <div class="user-name">刘懿萱</div>
                <div class="user-role">
                    管理员
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
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

        </ul>
    </aside>
</div>