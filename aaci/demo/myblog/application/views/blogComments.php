<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <base href="<?php echo site_url();?>"/>
  <title>Johnny的博客 - SYSIT个人博客</title>
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
<div class="MainForm BlogCommentManage">
  <h3>共有<?php echo count($comm);?> 篇博客评论，每页显示 20 个，共 1 页</h3>
  <ul> 
  <?php foreach($comm as $comms){?>
 
	<li id="cmt_24027_154693_261665734" class="row_1">
		<span class="portrait"><a href="user/user_index?writer=<?php echo $comms->USER_ID;?>" target="_blank"><img src="images/<?php echo $comms->COMMENTATOR_IMG;?>" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></span>
		<span class="comment">
		<div class="user"><b><?php echo $comms->COMMENTATOR_NAME;?></b> 评论了 <a href="blog/view/<?php echo $comms->COMM_BLOG_ID;?>" target="_blank"><?php echo $comms->COMMENT_TITLE;?></a></div>
		<div class="content"><p><?php echo $comms->CONTENT;?></p></div>
		<div class="opts">
			<span style="float:right;">
			<a href="blog/delete_onecomment?comm_id=<?php echo $comms->COMMENT_ID;?>">删除</a> |
			<a href="blog/delete_allcomment?commenter=<?php echo $comms->USER_ID?>">删除此人所有评论</a>
			</span>			
			<?php echo $comms->ADD_TIME;?>
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


</script>
</body></html>