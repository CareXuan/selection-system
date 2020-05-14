<section class="section">
    <h1 class="section-header">
        <div>实时排名</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <p><?php echo $msg;?></p>
                            <table class="table table-striped" style="text-align: center;">
                                <tr>
                                    <th colspan="2">错误减分</th>
                                </tr>
                                <tr>
                                    <td>学号</td>
                                    <td>
                                        <select class="form-control" name="number">
                                            <?php foreach ($stu_data as $item){
                                                ?>
                                                <option value="<?php echo $item['stu_id'];?>"><?php echo $item['stu_name']."({$item['stu_id']})"?></option>
                                            <?php
                                            }?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>减分理由</td>
                                    <td><input type="text" class="form-control" name="reason"></td>
                                </tr>
                                <tr>
                                    <td>减分量</td>
                                    <td><input type="text" class="form-control" name="grade"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><button type="submit" class="btn btn-success">提交</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>