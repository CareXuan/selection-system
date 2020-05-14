<?php
$type_arr = [
    1 => '德育',
    2 => '智育',
    3 => '体育',
];
?>

<section class="section">
    <h1 class="section-header">
        <div>导航栏管理</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="/message-add/grade-add-set-add?id=" class="btn btn-primary" style="margin-top: 8px;margin-left: 8px;">新增加分项</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="text-align: center;">
                            <tr>
                                <th>加分项类型</th>
                                <th>加分项名称</th>
                                <th>学年</th>
                                <th>加分量</th>
                                <th>操作</th>
                            </tr>
                            <?php
                            foreach ($all_data as $aaa) {
                                ?>
                                <tr>
                                    <td><?php echo $type_arr[$aaa['type']]; ?></td>
                                    <td><?php echo $aaa['reason']; ?></td>
                                    <td><?php echo $aaa['year']; ?></td>
                                    <td><?php echo $aaa['grade']; ?></td>
                                    <td>
                                        <a href="/message-add/grade-add-set-add?id=<?php echo $aaa['id']?>" class="btn btn-success">修改</a>
                                        <a href="/privilege-management/delete?id=<?php echo $aaa['id']?>" class="btn btn-danger">删除</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                        <div style="text-align: center;">
                            <a href="/message-add/grade-add-set?page=<?php echo $page-1;?>"><</a>
                            <?php for ($i = 1;$i <= $all_page;$i++){
                                ?>
                                <a href="/message-add/grade-add-set?page=<?php echo $i;?>"><?php echo $i;?></a>
                                <?php
                            } ?>
                            <a href="/message-add/grade-add-set?page=<?php echo $page+1;?>">></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>