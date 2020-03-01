<?php
 $status_arr = [
        1 => '优秀',
        2 => '良好',
        3 => '及格',
        4 => '不及格'
    ];
?>

<section class="section">
    <h1 class="section-header">
        <div>实时排名</div>
    </h1>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form action="/best-class/necessary" method="POST">
                        <p style="float: left;margin-right: 10px; padding-top:8px;">年级</p>
                        <select class="form-control" id="grade" name="grade" style="width: 200px;float: left;">
                            <option value="">请选择年级</option>
                            <?php
                            foreach ($return_option['grade'] as $grade){
                                ?>
                                <option value="<?php echo $grade;?>" <?php if ($return_grade == $grade){echo 'selected="selected"';}?>><?php echo $grade;?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <p style="float: left;margin-right: 10px; margin-left: 10px; padding-top:8px;">专业</p>
                        <select class="form-control" id="major" name="major" style="width: 200px;float: left;">
                            <option value="">请选择专业</option>
                            <?php
                            foreach ($return_option['major'] as $major){
                                ?>
                                <option value="<?php echo $major;?>" <?php if ($return_major == $major){echo 'selected="selected"';}?>><?php echo $major;?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <p style="float: left;margin-right: 10px; margin-left: 10px; padding-top:8px;">班级</p>
                        <select class="form-control" id="class" name="class" style="width: 200px;float: left;">
                            <option value="">请选择班级</option>
                            <?php
                            foreach ($return_option['class'] as $class){
                                ?>
                                <option value="<?php echo $class;?>" <?php if ($return_class == $class){echo 'selected="selected"';}?>><?php echo $class;?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-primary" style="margin-top: 8px;margin-left: 8px;">查询</button>
                    </form>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="text-align: center;">
                            <tr>
                                <th>班级</th>
                                <th>平均学分绩点</th>
                                <th>学籍处理数量</th>
                                <th>纪律处分数量</th>
                                <th>班级主页考评是否良好（优秀次数）</th>
                                <th>党员、班级干部成绩</th>
                                <th>寝室卫生检查情况</th>
                            </tr>
                            <?php
                            foreach ($avg_data as $avg_val){
                                ?>
                                <tr>
                                    <td><?php echo $avg_val['grade'];?>平均值</td>
                                    <td><?php echo round($avg_val['avg_grade'],2);?></td>
                                    <td><?php echo round($avg_val['avg_error_cnt'],2);?></td>
                                    <td><?php echo round($avg_val['avg_warning_cnt'],2);?></td>
                                    <td>-</td>
                                    <td><?php echo round($avg_val['avg_super_cnt'],2);?></td>
                                    <td>-</td>
                                </tr>
                                <?php
                            }
                            ?>
                            <?php
                            foreach ($data as $val){
                                ?>
                                <tr>
                                    <td><?php echo $val['major'].$val['class'];?></td>
                                    <td><?php echo $val['avg_grade'];?></td>
                                    <td><?php echo $val['error_cnt'];?></td>
                                    <td><?php echo $val['warning_cnt'];?></td>
                                    <td><?php echo $status_arr["{$val['homepage_status']}"]."({$val['homepage_good_cnt']})";?></td>
                                    <td><?php echo $val['super_avg_grade'];?></td>
                                    <td><?php echo $status_arr["{$val['bedroom_status']}"];?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>