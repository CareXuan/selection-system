<section class="section">
    <h1 class="section-header">
        <div>学生信息修改</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/system-management/student-change" method="post">
                            <table class="table table-striped">
                                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">学号</td>
                                    <td><input type="text" class="form-control" name="stu_id" value="<?php echo $data['stu_id'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">姓名</td>
                                    <td><input type="text" class="form-control" name="stu_name" value="<?php echo $data['stu_name'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">性别</td>
                                    <td><input type="text" class="form-control" name="stu_sex" value="<?php echo $data['stu_sex']?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">学年</td>
                                    <td><input type="text" class="form-control" name="stu_year" value="<?php echo $data['stu_year'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">班级</td>
                                    <td><input type="text" class="form-control" name="class" value="<?php echo $data['class'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">职位</td>
                                    <td><input type="text" class="form-control" name="work" value="<?php echo $data['work'];?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">类别</td>
                                    <td><input type="text" class="form-control" name="stu_class" value="<?php echo $data['stu_class']?>"></td>
                                </tr>
                                <tr>
                                    <td style="width: 100px; line-height: 45px;">寝室</td>
                                    <td><input type="text" class="form-control" name="bedroom" value="<?php echo $data['bedroom'];?>"></td>
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