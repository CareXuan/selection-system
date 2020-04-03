<section class="section">
    <h1 class="section-header">
        <div>角色</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="/privilege-management/add-role" class="btn btn-primary" style="margin-top: 8px;margin-left: 8px;">新增角色</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="text-align: center;">
                            <tr>
                                <th>角色名称</th>
                                <th>角色状态</th>
                                <th>操作</th>
                            </tr>
                            <?php foreach ($data as $item){
                                ?>
                                <tr>
                                    <td><?php echo $item['role_name'];?></td>
                                    <td><?php echo $item['role_status']?'启用':'禁用';?></td>
                                    <td>
                                        <a class="btn btn-success" style="color: white;" href="/privilege-management/add-role?id=<?php echo $item['id'];?>">编辑</a>
                                        <a class="btn btn-danger" style="color: white;" href="/privilege-management/del-role?id=<?php echo $item['id'];?>">删除</a>
                                    </td>
                                </tr>
                            <?php
                            }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>