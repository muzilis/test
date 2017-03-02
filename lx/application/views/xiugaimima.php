<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>修改密码</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>修改密码</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

    <form method="post" class="am-form" action="user/xiugaimima">
      <input type="hidden" name="uid" value="<?php echo $this->session->userdata('user_id')?>">

      <label for="email">原密码:</label>
      <input type="password" name="user_pwd1" id="user_pwd1" value="">
      <br>
      <label for="password">新密码:</label>
      <input type="password" name="user_pwd2" id="user_pwd2" value="">
      <br />
      <label for="password">重复新密码:</label>
      <input type="password" name="user_pwd3" id="user_pwd3" value="">
      <br />
      <div class="am-cf">
        <input type="submit" name="sub" value="确认修改" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
  </div>
</div>
</body>
</html>