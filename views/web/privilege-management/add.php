<section class="section">
    <h1 class="section-header">
        <div>添加导航栏</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/privilege-management/add" method="post">
                            <p><?php echo $msg;?></p>
                            <table class="table table-striped" style="text-align: center;">
                                <tr>
                                    <td>一级标签名</td>
                                    <td>
                                        <select class="form-control" name="first_tag">
                                            <option value="0">all</option>
                                            <?php
                                            foreach ($data as $val){
                                                ?>
                                                <option value="<?php echo $val['id'];?>" <?php if ($val['id']==$first)echo 'selected="selected"' ?>><?php echo $val['nav_bar_name'];?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>二级标签名</td>
                                    <td>
                                        <input type="text" class="form-control" name="second_tag" value="<?php echo $second;?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>url</td>
                                    <td>
                                        <input type="text" class="form-control" name="url" value="<?php echo $url;?>">
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
    $(document).ready(function () {
        $('')
    })
</script>