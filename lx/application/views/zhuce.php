
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>管理员登录</title>
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
        <h1>用户注册</h1>
    </div>
    <hr />
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

        <form method="post" class="am-form" action="user/getZhuce" id="mask">
            <label for="email">用户名:</label>
            <input type="text"  name="email" id="email" value="">
            <br>
            <label for="password">密码:</label>
            <input type="password" name="pwd" id="pwd1" value="">
            <br />
            <label for="password">重复密码:</label>
            <input type="password" name="pwd2" id="pwd2" value="">
            <br />
            <div class="am-cf">
                <input type="submit" value="注册" disabled="true" id="submit" class="am-btn am-btn-primary am-btn-sm am-fl">
            </div>
        </form>
        <hr>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/zhuce.js"></script>
</body>
</html>