<section class="section">
    <h1 class="section-header">
        <div>欢迎来到后台管理系统</div>
    </h1>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <form action="/user/login" method="post">
                    <table class="table table-striped">
                        <tr>
                            <td style="width: 100px;">用户名</td>
                            <td><input type="text" class="form-control" name="user_name"></td>
                        </tr>
                        <tr>
                            <td style="width: 100px;">密码</td>
                            <td><input type="password" class="form-control" name="password"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="submit" class="btn btn-success">登录</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</section>