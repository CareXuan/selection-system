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
                            <p><?php echo $return_msg;?></p>
                            <table class="table table-striped" style="text-align: center;">
                                <tr>
                                    <th colspan="2">学生信息导入</th>
                                </tr>
                                <tr>
                                    <td><input type="file" class="form-control" name="file"></td>
                                    <td><button type="submit" class="btn btn-success">导入</button></td>
                                </tr>
                            </table>
                            <p>
                                导入文件格式必须是csv格式，按照学号，姓名，性别，学年，班级，职位，类别，寝室排列进行导入，文件格式要保证为UTF-8字符集
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>