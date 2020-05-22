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
                                    <th colspan="3">智育体育分数导入</th>
                                </tr>
                                <tr>
                                    <td><input type="file" class="form-control" name="file"></td>
                                    <td>
                                        <select class="form-control" name="class">
                                            <option value="2">智育</option>
                                            <option value="3">体育</option>
                                        </select>
                                    </td>
                                    <td><button type="submit" class="btn btn-success">导入</button></td>
                                </tr>
                            </table>
                            <p>
                                导入文件格式必须是csv格式，按照学号，姓名，课程名称，课程分数，并选择导入分数类型进行导入，文件格式要保证为UTF-8字符集
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>