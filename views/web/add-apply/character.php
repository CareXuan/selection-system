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
                                    <th colspan="2">德育加分申请</th>
                                </tr>
                                <tr>
                                    <td>申请者学号</td>
                                    <td><input type="text" class="form-control" name="number"></td>
                                </tr>
                                <tr>
                                    <td style="line-height: 150px;">申请理由</td>
                                    <td>
                                        <textarea style="height: 150px;resize: none;" class="form-control" name="reason"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>活动照片</td>
                                    <td><input type="file" class="form-control" name="pic"></td>
                                </tr>
                                <input type="hidden" value="1" name="class">
                                <tr>
                                    <td colspan="2"><button type="submit" class="btn btn-success">申请</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>