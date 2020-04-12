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
                            <p><?php echo $file_return_msg;?></p>
                            <table class="table table-striped" style="text-align: center;">
                                <tr>
                                    <th colspan="2">文件导入</th>
                                </tr>
                                <tr>
                                    <td><input type="file" class="form-control" name="file"></td>
                                    <td>
                                        <select name="status" class="form-control">
                                            <option value="1">德育</option>
                                            <option value="2">智育</option>
                                            <option value="3">体育</option>
                                        </select>
                                    </td>
                                    <td><button type="submit" class="btn btn-success">导入</button></td>
                                </tr>
                            </table>
                        </form>
                        <form action="" method="POST">
                            <p><?php echo $manually_return_msg;?></p>
                            <table class="table table-striped" style="text-align: center;">
                                <tr>
                                    <th colspan="2">手动输入</th>
                                </tr>
                                <tr>
                                    <td>学号</td>
                                    <td><input type="text" class="form-control" name="number"></td>
                                </tr>
                                <tr>
                                    <td>班级</td>
                                    <td><input type="text" class="form-control" name="class"></td>
                                </tr>
                                <tr>
                                    <td>姓名</td>
                                    <td><input type="text" class="form-control" name="name"></td>
                                </tr>
                                <tr>
                                    <td>德育基础分</td>
                                    <td><input type="text" class="form-control" name="basic"></td>
                                </tr>
                                <tr>
                                    <td>类型</td>
                                    <td>
                                        <select name="status" class="form-control">
                                            <option value="1">德育</option>
                                            <option value="2">智育</option>
                                            <option value="3">体育</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><button type="submit" class="btn btn-success">录入</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>