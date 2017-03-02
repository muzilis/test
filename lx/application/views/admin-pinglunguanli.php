<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>admin评论管理</title>
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
<!--[if lte IE 9]>
<!--<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>-->
  <!--以获得更好的体验！</p>-->
<![endif]-->

<?php include 'admin-header.php'; ?>
<?php
//  if($this->session->userdata('admin_id')){
$admin_name= $this->session->userdata('admin_name');
//    $admin_name = $admin_name."已登陆";

//  }else{

//    $admin_name="未登陆";
//  }
if(!$admin_name){
  redirect('admin/login');
}
?>
<span id="ad"><a href="javascript:;"><?php echo $admin_name?>已登陆</a></span>

<div class="am-cf admin-main">
  <?php include 'admin-sidebar.php'; ?>

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">评论管理</strong></div>
    </div>



    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>ID</th><th>用户名</th><th>评论电影名</th><th>评论内容</th><th>评论时间</th><th>管理</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($pingluns as $pinglun){
          ?>
          <tr><td><?php echo $pinglun->comment_id?></td><td><?php echo $pinglun->user_email?></td><td><?php echo $pinglun->movie_id?></td><td><?php echo $pinglun->comment_content?></td><td><?php echo $pinglun->comment_time?></td>
            <td>

<!--              <input type="button" value="删除" style="background: #bce5fb" id="btn">-->
<!--              <button style="background: #bce5fb" id="btn" data-id="--><?php //echo $pinglun->comment_id; ?><!--">删除</button>-->
              <button id='default' style="background: #bce5fb" data-id="<?php echo $pinglun->comment_id; ?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                <!--                          <a href="admin/delete_user?id=--><?php //echo $user -> user_id;?><!--">-->
                <span class="am-icon-trash-o"></span> 删除</button>
            </td>
          </tr>
          <?php
          }
          ?>
          </tbody>
        </table>
      </div>
    </div>


  </div>
  <!-- content end -->

</div>

<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
  $(function(){
    $('.am-hide-sm-only').on('click',function(){
      var pinglunId =  $(this).data('id');
//      console.log(adminId);

      if(confirm('确定是否删除记录，不可恢复!?')){
        location.href = 'admin/delete_pinglun?pinglun_id='+pinglunId;
      }
    });
  });









</script>
</body>
</html>













