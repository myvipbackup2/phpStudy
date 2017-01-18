<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <base href="<?php echo site_url();?>"/ >
  <title>我的留言箱 Johnny的博客 - SYSIT个人博客</title>
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
<ul class="tabnav"> 
	<li class="tab1 current"><a href="blog/inboxblog/outBox?user=<?php echo $login_user->USER_ID;?>">所有留言<em>(<?php echo count($msg);?>)</em></a></li> 
	<li class="tab4"><a href="blog/outBox?user=<?php echo $login_user->USER_ID;?>">已发送留言<em></em></a></li>
    </ul>
<div class="MsgList">
<ul>
	<?php foreach($msg as $message){?>
    <li id="msg_186720">
	<span class="sender"><a href="user/user_index?writer=<?php echo $message->SENDER;?>"><img src="images/<?php echo $message->IMG;?>" alt="红薯" title="红薯" class="SmallPortrait" user="12" align="absmiddle"></a></span>
	<span class="msg">
		<div class="outline">
			<a href="user/user_index/writer=<?php echo $message->SENDER;?>"" target="user"></a><?php echo $message->NAME?>
			发送于 <?php echo $message->ADD_TIME?>				
			&nbsp;&nbsp;<a href="blog/dele_msgin?ID=<?php echo $message->MSG_ID;?>">删除</a>
		</div>
		<div class="content">
		  <div class="c"><?php echo $message->CONTENT?></div></div>
		<div class="opts">
			<a href="javascript:sendmsg(12,186720)">回复留言</a>
					</div>
	</span>
	<div class="clear"></div>
  </li>
  <?php }?>
  </ul>
</div>

</div>
	<div class="clear"></div>
</div>

</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</body></html>