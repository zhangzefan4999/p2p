<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- 移入bootstrap的css -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>

<body>
  <!-- 第一导航 --><!-- 第二导航 -->
  <?php
    require_once("header.php")
  ?>

  
  

  <!-- banner -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./imgs/banner01.jpg" alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
      <div class="item">
        <img src="./imgs/banner02.jpg" alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- 三大特色 -->
  <div class="container feature">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="featurePic">
          <img src="./imgs/feature01.png" alt="">
        </div>
        <div class="featureTitle">
          <h4>违法犯罪</h4>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="featurePic">
          <img src="./imgs/feature02.png" alt="">
        </div>
        <div class="featureTitle">
          <h4>坑蒙拐骗</h4>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="featurePic">
          <img src="./imgs/feature03.png" alt="">
        </div>
        <div class="featureTitle">
          <h4>强抢民女</h4>
          <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
        </div>
      </div>
    </div>
  </div>

  <!-- 借款中 -->
  <div class="container loan">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading clearfix">
        <p class="pull-left">进行借款中</p>
        <span class="pull-right">
          <a href="">进入投资列表</a>
        </span>
      </div>
      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>借款人</th>
            <th class="hidden600">借款标题</th>
            <th>年利率</th>
            <th>金额</th>
            <th class="hidden600">还款方式</th>
            <th>进度</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">张三</th>
            <td class="hidden600">给我2000度过难关</td>
            <td>10.00%</td>
            <td>2,000.00</td>
            <td class="hidden600">按月分期还款</td>
            <td>78.00%</td>
            <td>
              <button type="button" class="btn btn-danger btn-xs">查看</button>
            </td>
          </tr>
          <tr>
            <th scope="row">张三</th>
            <td class="hidden600">给我2000度过难关</td>
            <td>10.00%</td>
            <td>2,000.00</td>
            <td class="hidden600">按月分期还款</td>
            <td>78.00%</td>
            <td>
              <button type="button" class="btn btn-danger btn-xs">查看</button>
            </td>
          </tr>
          <tr>
            <th scope="row">张三</th>
            <td class="hidden600">给我2000度过难关</td>
            <td>10.00%</td>
            <td>2,000.00</td>
            <td class="hidden600">按月分期还款</td>
            <td>78.00%</td>
            <td>
              <button type="button" class="btn btn-danger btn-xs">查看</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>

  <!-- 企业最小资讯/用户反馈 -->
  <div class="container news">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading clearfix">
            <p class="pull-left">企业最小资讯</p>
            <span class="pull-right">
              <a href="">进入投资列表</a>
            </span>
          </div>
        </div>
        <ul>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
        </ul>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading clearfix">
            <p class="pull-left">用户反馈</p>
            <span class="pull-right">
              <a href="">进入投资列表</a>
            </span>
          </div>
        </div>
        <ul>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- 理财经验/活动分享 -->
  <div class="container news">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading clearfix">
            <p class="pull-left">理财经验</p>
            <span class="pull-right">
              <a href="">进入投资列表</a>
            </span>
          </div>
        </div>
        <ul>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
        </ul>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading clearfix">
            <p class="pull-left">活动分享</p>
            <span class="pull-right">
              <a href="">进入投资列表</a>
            </span>
          </div>
        </div>
        <ul>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
          <li>央视力挺互联网金融
            <span class="pull-right">发表日期：2015-03-23</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- foot -->
  <?php
    require_once("footer.php")
  ?>


  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./dist/js/index.min.js"></script>
</body>

</html>