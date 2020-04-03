<section class="section">
    <h1 class="section-header">
        <div>待审核</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="text-align: center;">
                            <tr>
                                <th>学号</th>
                                <th>审核类型</th>
                                <th>操作</th>
                            </tr>
                            <?php foreach ($data as $item){
                                ?>
                                <tr>
                                    <td><?php echo $item['stu_number'];?></td>
                                    <td><?php echo $class_arr[$item['class']];?></td>
                                    <td>
                                        <a class="btn btn-success" style="color: white;" href="/add-check/check?id=<?php echo $item['id'];?>">审核</a>
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