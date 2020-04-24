<section class="section">
    <h1 class="section-header">
        <div>班级信息管理</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="text-align: center;">
                            <tr>
                                <th>学院编号</th>
                                <th>学院名称</th>
                                <th>专业编号</th>
                                <th>专业名称</th>
                                <th>班级编号</th>
                                <th>班级名称</th>
                                <th>操作</th>
                            </tr>
                            <?php foreach ($data as $item){
                                ?>
                                <tr>
                                    <td><?php echo $item['college_id'];?></td>
                                    <td><?php echo $item['college_name'];?></td>
                                    <td><?php echo $item['major_id']?></td>
                                    <td><?php echo $item['major_name'];?></td>
                                    <td><?php echo $item['class_id'];?></td>
                                    <td><?php echo $item['class_name'];?></td>
                                    <td>
                                        <a href="/system-management/class-admin-change?id=<?php echo $item['id'];?>" class="btn btn-primary">修改</a>
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