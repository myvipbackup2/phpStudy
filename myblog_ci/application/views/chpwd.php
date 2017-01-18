<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <base href="<?php echo site_url();?>"/>
  <title>修改登录密码 Johnny的博客 - SYSIT个人博客</title>
      <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  <script type="text/javascript" src="js/jquery-1.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery_002.js"></script>
  <script type="text/javascript" src="js/oschina.js"></script>
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}	
  </style>
</head>
<body>
	<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
	<?php include 'top.php'?>
	<div id="OSC_Content">
	<div id="AdminScreen">
    <?php include'leftMenu.php'?>
    <div id="AdminContent">

<div class="MainForm">
<form class="AutoCommitJSONForm" action="/action/profile/passwd" method="POST">
<h2>修改我的登录密码</h2>
<table width="100%">
	<tbody><tr>
		<th width="110">旧的登录密码</th>		
		<td>
			<input name="pwd" size="20" class="TEXT" tabindex="1" type="password">&nbsp;&nbsp;&nbsp;&nbsp;		
			<a href="#" target="_blank">忘记登录密码</a>
		</td>    		
	</tr>
	<tr>
		<th>新密码</th>		
		<td><input name="newpwd" size="20" class="TEXT" tabindex="2" type="password"></td>    		
	</tr>
	<tr>
		<th>再次输入新密码</th>		
		<td><input name="newpwd2" size="20" class="TEXT" tabindex="3" type="password"></td>    		
	</tr>
	<tr><th colspan="2"></th></tr>
	<tr class="submit">
		<th></th>
		<td>
		<input value="修改密码" class="BUTTON SUBMIT" tabindex="4" type="submit">
		<span id="error_msg" style="display:none"></span>
		</td>
	</tr>
</tbody></table>
</form>
</div></div>
	<div class="clear"></div>
</div>

</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>

</body></html>