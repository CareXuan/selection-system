<?php
$role_name = $role?$role->role_name:'';
$auth_arr = [];
$role_id = \app\models\Role::getByRoleName($role_name)['id'];
$auth_data = \app\models\Authority::getByRoleId($role_id);
foreach ($auth_data as $auth_item){
    $auth_arr[] = $auth_item['nav_id'];
}
?>

<section class="section">
    <h1 class="section-header">
        <div>角色管理</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/privilege-management/add-role?id=<?php echo empty($_GET['id'])?'':$_GET['id']; ?>" method="post">
                            <p><?php echo $msg;?></p>
                            <table class="table table-striped">
                                    <tr>
                                        <td style="width: 100px;">角色名</td>
                                        <td>
                                            <input type="text" class="form-control" name="role_name" value="<?php echo $role_name;?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>状态</td>
                                        <td>
                                            <select class="form-control" name="role_status">
                                                <option value="1" <?php if ($role)echo $role->role_status==1?'selected="selected"':'';?>>启用</option>
                                                <option value="0" <?php if ($role)echo $role->role_status==0?'selected="selected"':'';?>>禁用</option>
                                            </select>
                                        </td>
                                    </tr>
                                <tr>
                                    <td colspan="2"><h5>权限分配</h5></td>
                                </tr>
                                <?php foreach ($data as $key => $value){
                                    ?>
                                    <tr>
                                        <td><?php echo $key;?>模块</td>
                                        <td>
                                            <?php foreach ($value as $item){
                                                ?>
                                                <input type="checkbox" <?php echo in_array($item['id'],$auth_arr)?'checked="checked"':''; ?> value="<?php echo $item['id'];?>" name="<?php echo $item['href'];?>"><?php echo $item['name']; ?>
                                            <?php
                                            } ?>
                                        </td>
                                    </tr>
                                <?php
                                }?>
                                <tr style="text-align: center;">
                                    <td colspan="2"><button class="btn btn-success" type="submit">添加</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>