<section class="section">
    <h1 class="section-header">
        <div>导航栏管理</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="/privilege-management/add" class="btn btn-primary" style="margin-top: 8px;margin-left: 8px;">新增导航栏</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="text-align: center;">
                            <tr>
                                <th>id</th>
                                <th>p_id</th>
                                <th>nav_bar_name</th>
                                <th>url</th>
                                <th>操作</th>
                            </tr>
                            <?php
                            foreach ($all_data as $aaa) {
                                ?>
                                <tr>
                                    <td><?php echo $aaa['id']; ?></td>
                                    <td><?php echo $aaa['p_id']; ?></td>
                                    <td><?php echo $aaa['nav_bar_name']; ?></td>
                                    <td><?php echo $aaa['href']; ?></td>
                                    <td>
                                        <a href="/privilege-management/add?id=<?php echo $aaa['id']?>" class="btn btn-success">修改</a>
                                        <a href="/privilege-management/delete?id=<?php echo $aaa['id']?>" class="btn btn-danger">删除</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>