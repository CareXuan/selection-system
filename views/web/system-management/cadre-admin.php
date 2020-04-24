<section class="section">
    <h1 class="section-header">
        <div>班干部信息管理</div>
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
                                <th>学号</th>
                                <th>姓名</th>
                                <th>性别</th>
                                <th>学年</th>
                                <th>班级</th>
                                <th>职位</th>
                                <th>类别</th>
                                <th>寝室</th>
                                <th>操作</th>
                            </tr>
                            <?php foreach ($data as $item){
                                ?>
                                <tr>
                                    <td><?php echo $item['stu_id'];?></td>
                                    <td><?php echo $item['stu_name'];?></td>
                                    <td><?php echo $item['stu_sex']?></td>
                                    <td><?php echo $item['stu_year'];?></td>
                                    <td><?php echo $item['class'];?></td>
                                    <td><?php echo $item['work'];?></td>
                                    <td><?php echo $item['stu_class']?></td>
                                    <td><?php echo $item['bedroom'];?></td>
                                    <td>
                                        <a href="/system-management/student-admin-change?id=<?php echo $item['id'];?>" class="btn btn-primary">修改</a>
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