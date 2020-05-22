<section class="section">
    <h1 class="section-header">
        <div>添加导航栏</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/message-add/grade-add-set-add?id=<?php echo $id;?>" method="post">
                            <p><?php echo $msg;?></p>
                            <table class="table table-striped" style="text-align: center;">
                                <tr>
                                    <td>加分项类型</td>
                                    <td>
                                        <select class="form-control" name="type">
                                            <option value="1" <?php echo $type == 1 ? "selected='selected'" : ""; ?>>德育</option>
                                            <option value="2" <?php echo $type == 2 ? "selected='selected'" : ""; ?>>智育</option>
                                            <option value="3" <?php echo $type == 3 ? "selected='selected'" : ""; ?>>体育</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>加分项名称</td>
                                    <td>
                                        <input type="text" class="form-control" name="reason" value="<?php echo $reason;?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>加分量</td>
                                    <td>
                                        <input type="text" class="form-control" name="grade" value="<?php echo $grade;?>">
                                    </td>
                                </tr>
                                <input type="hidden" value="1" name="check">
                                <tr>
                                    <td colspan="2"><button class="btn btn-success" type="submit">添加</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>

</script>