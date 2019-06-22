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
  <link rel="stylesheet" href="./dist/css/minCss/login.min.css">
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
        <h3 class="panel-title">用户登录</h3>
      </div>
      
      <div class="panel-body">
        <form class="form-horizontal loginForm">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="请输入用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="请输入密码">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success">登录</button>
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


  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
  <script src="./dist/js/index.min.js"></script>
  <script src="./dist/js/checkLogin.min.js"></script>
</body>

</html>