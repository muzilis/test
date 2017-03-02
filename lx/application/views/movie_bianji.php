<!DOCTYPE html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin user Examples</title>
  <meta name="description" content="这是一个 user 页面">
  <meta name="keywords" content="user">
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
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'?>
<?php
//if($this->session->userdata('admin_id')){
//  $admin_name= $this->session->userdata('admin_name');
//  $admin_name = $admin_name."已登陆";
//
//}else{
//  $admin_name="未登陆";
//}
    $admin_name= $this->session->userdata('admin_name');
      if(!$admin_name){
        redirect('admin/login');
    }
?>
<span id="ad"><a href="javascript:;"><?php echo $admin_name?>已登陆</a></span>
<div class="am-cf admin-main">
<!--  --><?php //include 'admin-header.php'; ?>
  <?php include 'admin-sidebar.php'?>


  <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">影视信息</strong> </div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
        <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="am-g">

              <div class="am-u-md-8">
                <p>你可以使用<a href="#">gravatar.com</a>提供的头像或者使用本地上传头像。 </p>
                <form class="am-form">
                  <div class="am-form-group">
                    <input type="file" id="user-pic">
                    <p class="am-form-help">请选择要上传的文件...</p>
                    <button type="button" class="am-btn am-btn-primary am-btn-xs">保存</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="user-info">
              <p>等级信息</p>
              <div class="am-progress am-progress-sm">
                <div class="am-progress-bar" style="width: 60%"></div>
              </div>
              <p class="user-info-order">当前等级：<strong>LV8</strong> 活跃天数：<strong>587</strong> 距离下一级别：<strong>160</strong></p>
            </div>
            <div class="user-info">
              <p>信用信息</p>
              <div class="am-progress am-progress-sm">
                <div class="am-progress-bar am-progress-bar-success" style="width: 80%"></div>
              </div>
              <p class="user-info-order">信用等级：正常当前 信用积分：<strong>80</strong></p>
            </div>
          </div>
        </div>

      </div>



      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">

        <form class="am-form am-form-horizontal" method="post" action="admin/admin_movie_bianji">
<!--          <input type="hidden" name="id" value="--><?php //echo $movies->movie_id?><!--">-->
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">NAME</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" name="mname" value="">
            </div>
          </div>



          <div class="am-form-group">
            <label for="user-phone" class="am-u-sm-3 am-form-label">SCALE</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-phone"name="fenshu" value="">
            </div>
          </div>


          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">IMG</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro" name="mcontent" ></textarea>
            </div>
          </div>
          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">TYPE</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro1" name="mtype" ></textarea>
            </div>
          </div>
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
<!--              <input type="hidden" name="id" value="--><?php //echo $movies->movie_id?><!--">-->
              <button id="save-btn" type="submit" class="am-btn am-btn-primary">上传影视信息</button>
            </div>
          </div>




        </form>
      </div>
    </div>
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>
<script src="js/jquery.js"></script>

<script>
  $(function(){
    $('#save-btn').on('click', function(){
      var $mname = $('[name="mname"]'),
          $fenshu = $('[name="fenshu"]'),
          $mcontent = $('[name="mcontent"]'),
          $mtype = $('[name="mtype"]');

      $.post('admin/movie_bianji', {
        mname:$mname.val(),
        fenshu:$fenshu.val(),
        mcontent:$mcontent.val(),
        mtype:$mtype.val()
      },function(data) {
        if (data == 'success') {
          alert('上传成功');
        } else {
          alert('上传失败请填写正确信息');
        }
      });
      });
  });

</script>


</body>
</html>
