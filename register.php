<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- 移入bootstrap的css -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/register.min.css">
</head>

<body>
  <!-- 第一导航 -->
  <!-- 第二导航 -->
  <?php
    require_once("header.php")
  ?>

  <!-- 注册表单验证 -->
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">用户注册</h3>
      </div>
      
      <div class="panel-body">
        <form class="form-horizontal registerForm">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control"  placeholder="请输入用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control"  placeholder="请输入密码">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
              <input type="password" name="checkPassword" class="form-control"  placeholder="请再次输入密码">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
            <div class="col-sm-10">
              <input type="text" name="mobile" class="form-control"  placeholder="请输入手机号码">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
              <input type="text" name="email" class="form-control"  placeholder="请输入邮箱">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">统一协议并注册</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>




  <!-- foot -->
  <?php
    require_once("footer.php")
  ?>

  <!-- Modal -->
<div class="modal fade" id="myRegisterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="myModalBody">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>

  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
  <script src="./dist/js/index.min.js"></script>
  <script src="./dist/js/register.min.js"></script>
</body>

</html>