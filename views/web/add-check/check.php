<section class="section">
    <h1 class="section-header">
        <div>实时排名</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                            <table class="table table-striped" style="text-align: center;">
                                <tr>
                                    <th colspan="2">加分申请</th>
                                </tr>
                                <tr>
                                    <td>申请者学号</td>
                                    <td><input type="text" class="form-control" name="number" value="<?php echo $data['stu_number'];?>" disabled></td>
                                </tr>
                                <tr>
                                    <td style="line-height: 150px;">申请理由</td>
                                    <td>
                                        <textarea style="height: 150px;resize: none;" class="form-control" name="reason" disabled><?php echo $data['reason'];?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>活动照片</td>
                                    <td><img src="<?php echo str_replace('/var/www/html','http://localhost',$data['picture']);?>" style="width: 800px;height: 400px;"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a type="submit" style="color: white;" href="/add-check/check-status?id=<?php echo $_GET['id'];?>&&status=1" class="btn btn-success">通过</a>
                                        <a type="submit" style="color: white;" href="/add-check/check-status?id=<?php echo $_GET['id'];?>&&status=2" class="btn btn-danger">拒绝</a>
                                    </td>
                                </tr>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>