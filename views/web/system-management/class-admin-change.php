<section class="section">
    <h1 class="section-header">
        <div>班级信息修改</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/system-management/class-change" method="post">
                            <table class="table table-striped">
                                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">学院ID</td>
                                    <td><input type="text" class="form-control" name="college_id" value="<?php echo $data['college_id'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">学院名称</td>
                                    <td><input type="text" class="form-control" name="college_name" value="<?php echo $data['college_name'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">专业ID</td>
                                    <td><input type="text" class="form-control" name="major_id" value="<?php echo $data['major_id']?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">专业名称</td>
                                    <td><input type="text" class="form-control" name="major_name" value="<?php echo $data['major_name'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">班级ID</td>
                                    <td><input type="text" class="form-control" name="class_id" value="<?php echo $data['class_id'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">班级名称</td>
                                    <td><input type="text" class="form-control" name="class_name" value="<?php echo $data['class_name'];?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" class="btn btn-success">修改</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>