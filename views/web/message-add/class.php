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
                                    <th colspan="2">班级信息导入</th>
                                </tr>
                                <tr>
                                    <td><input type="file" class="form-control" name="file"></td>
                                    <td><button type="submit" class="btn btn-success">导入</button></td>
                                </tr>
                            </table>
                            <p>
                                导入文件格式必须是csv格式，按照学院编号，学院名称，专业编号，专业名称，班级编号，班级名称排列进行导入
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>