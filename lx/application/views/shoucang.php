<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin table Examples</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
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


<div class="am-cf admin-main">

  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">收藏夹</strong><br><a href="user/indexed">回到首页</a></div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-id">收藏ID</th>
                <th class="table-title">电影id</th>
                <th class="table-type">用户id</th>
                <th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach($shoucangs as $shoucang)
            {
            ?>
              <tr>
                <td><?php echo $shoucang->shoucang_id;?></td>
                <td><?php echo $shoucang->movie_id;?></td>
                <td><?php echo $shoucang->user_email;?></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <button id='default' data-id="<?php echo $shoucang->shoucang_id;?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                  </div>
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

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
  $(function(){
    $('.am-hide-sm-only').on('click', function(){
//        alert(123);
      var shoucangId =  $(this).data('id');
//      console.log(adminId);

      if(confirm('确定是否删除记录，不可恢复!?')){
        location.href = 'user/delete_shoucang?shoucang_id='+shoucangId;
      }
    });
  });
</script>

</body>
</html>
