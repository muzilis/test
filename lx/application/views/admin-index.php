<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin index</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<?php include 'admin-header.php'; ?>
<?php
    $admin_name= $this->session->userdata('admin_name');
    if(!$admin_name){
      redirect('admin/login');
    }
?>
<span id="ad"><a href="javascript:;"><?php echo $admin_name?>已登陆</a></span>
<div class="am-cf admin-main">
  <?php include 'admin-sidebar.php'; ?>
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">admin首页</strong></div>
    </div>
    <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="admin/ad_pinglunguanli"><span class="am-icon-btn am-icon-file-text"></span>评论管理</a></li>
      <li><a href="admin/admin_user"><span class="am-icon-btn am-icon-briefcase"></span>用户管理</a></li>
      <li><a href="admin/admin_movie_bianji"><span class="am-icon-btn am-icon-recycle"></span>影视管理</a></li>
    </ul>
  </div>
</div>


<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
