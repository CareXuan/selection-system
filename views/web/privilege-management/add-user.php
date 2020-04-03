<section class="section">
    <h1 class="section-header">
        <div>用户管理</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/privilege-management/add-user?id=<?php echo empty($_GET['id'])?'':$_GET['id']; ?>" method="post">
                            <p><?php echo $msg;?></p>
                            <table class="table table-striped">
                                <tr>
                                    <td style="width: 100px;">用户名</td>
                                    <td>
                                        <input type="text" class="form-control" name="user_name" value="<?php echo $user['user_name'];?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;">密码</td>
                                    <td>
                                        <input type="text" class="form-control" name="password" value="<?php echo $user['password'];?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>角色</td>
                                    <td>
                                        <select class="form-control" name="role">
                                            <?php foreach ($role_data as $role_item){
                                                ?>
                                                <option value="<?php echo $role_item['id'];?>"><?php echo $role_item['role_name'];?></option>
                                            <?php
                                            }?>
                                        </select>
                                    </td>
                                </tr>
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