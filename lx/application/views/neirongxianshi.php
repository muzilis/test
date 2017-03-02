<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <title>用户评价</title>
	<base href="<?php echo site_url(); ?>">

	<link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  <script type="text/javascript" src="js/jquery-1.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery_002.js"></script>
  <script type="text/javascript" src="js/oschina.js"></script>
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}
	  *{
		  list-style: none;
	  }
  </style>
</head>
<body>
<?php
if($this->session->userdata('user_id')){
	$email= $this->session->userdata('user_email');
	$email = $email;

}else{
	$email="未登陆";
}

?>

<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>

<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
<div id="OSC_Banner" style="background: #bce5fb;border: 1px solid #bce5fb">
    <div class="clear"></div>
</div><!-- #EndLibraryItem --><div id="OSC_Topbar">
	  <div id="VisitorInfo">
		当前访客：
				<?php echo $email?><br/>
		  		<a href="user/indexed" >返回首页</a>
				<span id="OSC_Notification">
<!--			<a href="sendMsg.htm" class="msgbox" title="进入我的留言箱">你有<em>0</em>新留言</a>-->
					</span>
  </div>
		<div id="SearchBar">
    		<form action="#">
								<input name="user" value="154693" type="hidden">
<!--																								<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索" onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value" onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">-->
<!--				<input class="SUBMIT" value="搜索" type="submit">-->
    		</form>
		</div>
		<div class="clear"></div>
	</div>
	<div id="OSC_Content"><div class="SpaceChannel">
<!--	<div id="portrait"><a href="#"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></div>-->
    <div id="lnks">
<!--		<strong>Johnny的博客</strong>-->
		<div>
<!--			<a href="index.php">TA的博客列表</a>&nbsp;|-->
<!--			<a href="javascript:sendmsg(154693)">发送留言</a>-->
</span>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="Blog">
	

  <div class="BlogTitle">
<!--    <h1>测试文章3</h1>-->
    <div class="BlogStat">
<!--						<span class="admin">-->
<!--			<a href="newBlog.php">编辑</a>&nbsp;|&nbsp;<a href="javascript:delete_blog(24026)">删除</a>-->
<!--		</span>-->
<!--				发表于1小时前 , -->
<!--		已有<strong>4</strong>次阅读  -->
<!--		共<strong><a href="#comments">2</a></strong>个评论-->
<!--		<strong>1</strong>人收藏此文章-->
	</div>
  </div>

	<div class="BlogContent TextContent"></div>
	<div class="BlogLinks">

<!--	<ul>-->
<!--          <li>上篇 <span>(1小时前)</span>：<a href="viewPost_logined.php" class="prev">测试文章2</a></li>            	</ul>-->
		<div class="comment">
<!--			--><?php //foreach($pingluns as $pinglun)
//			{
//
//
//				?>
<!--				<p style="color: #7c7c7c;">评论用户:--><?php //echo $pinglun->user_email;?><!--</p><li style="background: #99AAFF;display: inline-block;">--><?php //echo $pinglun->comment_content?><!--</li><span style="float: right;color: #7c7c7c">--><?php //echo $pinglun->comment_time;?><!--</span><br/><hr style="height: 3px;background: #c1d9f4"><br/>-->
<!--				--><?php
//			}
//			?>
<!--		</div>-->
  </div>
    <div class="BlogComments">
			<ul id="BlogComments">
	<li id='cmt_24027_154693_261665734'>

	<div class='portrait'>


	</div>

	<div class='body'>

		<div class='title'>

		<div id='inline_reply_of_24027_154693_261665734' class='inline_reply'></div>

    </div>

	<div class='clear'></div>

</li>	</ul>
		  </div>


  <div class="CommentForm">
    <a name="postform"></a>

<!--		<input type="hidden" value="--><?php //echo $email?><!--" name="hid">-->

      <textarea id="ta_post_content" name="con" style="width: 450px; height: 100px;"></textarea><br>
<!--		<input value="发表评论" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
	  <span id="cmt_tip">文明上网，理性发言</span>
	<a href="user/indexed" class="more">回到首页</a>
  </div>
  </div>

</div>
<div class="clear"></div>

<div id="inline_reply_editor" style="display:none;">
<div class="CommentForm">
</div>
</div>
<!--<script type="text/javascript" src="js/blog.htm" defer="defer"></script>-->
<script type="text/javascript" src="js/brush.js"></script>
<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css">
<script type="text/javascript">
//	$(function(){
//		$('#btn_comment').on('click',function(){
//			var $con = $('[name="con"]'),
//				$hid = $('[name="hid"]');
//			$.post('user/get_pinglun',{con:$con.val(),mid:$('#btn_comment').data('id'),hid:$hid.val()},function(data){
//				if(data){
//					alert('评论成功!');
////					console.log(data);
//					var html = '<p style="color: #7c7c7c;">评论用户:'+data.user_email+'</p>'
//					+'<li style="background: #99AAFF;display: inline-block;">'+data.comment_content+'</li>'
//							+'<span style="float: right;color: #7c7c7c">'+data.comment_time+'</span>'
//							+'<br/>'
//							+'<hr style="height: 3px;background: #c1d9f4">'
//							+'<br/>';
//					$('.comment').append(html);
//
//				}else{
//					alert('评论失败请重新评论!');
//				}
//			},'json');
//		});
//	});
</script>
</div>
	<div class="clear"></div>
<!--	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>-->
</div>
</body></html>