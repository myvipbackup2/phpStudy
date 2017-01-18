<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <base href="<?php echo site_url();?>">
  <title>个人博客</title>
    <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  <script type="text/javascript" src="js/jquery-1.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery_002.js"></script>
  <script type="text/javascript" src="js/oschina.js"></script>
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif;}	
  </style>
</head>
<body>
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
	<?php include 'top.php'?>
	<div id="OSC_Content">
		<div class="SpaceChannel">
			<div id="portrait"><a href="user/user_index?writer=<?php echo $blog->WRITER;?>"><img src="images/<?php echo $blog->WRITER_IMG;?>"></a></div>
	    	<div id="lnks">
				<strong><?php echo $blog->WRITER_NAME;?>的博客</strong>
				<div>
					<a href="user/user_index?writer=<?php echo $blog->WRITER;?>">TA的博客列表</a>&nbsp;
				<?php if($login_user&&$login_user->USER_ID!=$blog->WRITER){?>
					<a href="message/into_msg?receiver=<?php echo $blog->WRITER;?>">发送留言</a>
				<?php }?>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
<div class="BlogMenu">
	<div class="RecentBlogs SpaceModule">
		<strong>最新博文</strong>
		<ul>
	    		<li><a href="#">测试文章2</a></li>
					<li><a href="#">测试文章1</a></li>
				<li class="more">
				<a href="user/user_index?writer=<?php echo $blog->WRITER?>">查看所有博文»</a></li>
	    </ul>
    </div>
</div>	
	<div class="Blog">


	  <div class="BlogTitle">
	    <h1><?php echo $blog->TITLE?></h1>
	    <div class="BlogStat">
	    <?php if($login_user&&$login_user->USER_ID==$blog->WRITER){?>
							<span class="admin">
				<a href="">编辑</a>&nbsp;|&nbsp;<a href="">删除</a>
			</span>
		<?php }?>
					<?php echo $blog->ADD_TIME?> 
			已有<strong>4</strong>次阅读  
			共<strong><a href="#comments"><?php echo count($comm);?></a></strong>个评论
			<strong>1</strong>人收藏此文章
		</div> 
	  </div>
 	  <div class="BlogContent TextContent"><?php echo $blog->CONTENT;?></div>
      <div class="BlogLinks">
		<ul>
          <li>上篇 <span>(1小时前)</span>：<a href="#" class="prev">测试文章1</a></li><li>下篇 <span>(11小时前)</span>：<a href="viewPost_comment.htm" class="next">测试文章3</a></li> 
       	</ul>
   	 </div>
	    <div class="BlogComments">
	    	<h2><a name="comments" href="#postform" class="opts">发表评论»</a>共有<?php echo count($comm);?>条网友评论</h2>
			<ul id="BlogComments">
			<?php 
				foreach($comm as $comment) {
			?>
				<li>
					<div class="portrait">
						<a href="user/user_index?writer=<?php echo $comment->COMMENTATOR;?>"><img src="images/<?php echo $comment->COMMENTATOR_IMG?>"></a>			
					</div>
					<div class="body">
						<div class="title">
							<?php echo $comment->COMMENTATOR_NAME;?> 	<?php echo $comment->ADD_TIME;?>		
				        	<a href="javascript:delete_c(24026,154693,261665458)">删除</a>
						</div>
						<div class="post"><?php echo $comment->CONTENT;?></div>
						<div id="inline_reply_of_24026_154693_261665458" class="inline_reply"></div>
				    </div>
					<div class="clear"></div>
				</li>
			<?php 
				}
			?>
			</ul>
	   
			<div class="CommentForm">
			   <a name="postform"></a>
			    <form id="form_comment" action="blog/add_comment?blog_id=<?php echo $blog->BLOG_ID?>" method="POST">          
			    <textarea id="ta_post_content" name="comment" style="width: 450px; height: 100px;"></textarea><br>
				<input value="发表评论" id="btn_comment" class="SUBMIT" type="submit"> 
				<img id="submiting" style="display: none;" src="images/loading.gif" align="absmiddle">
				<span id="cmt_tip">文明上网，理性发言</span>
			    </form>
				<a href="#" class="more">回到顶部</a>
				<a href="#comments" class="more">回到评论列表</a>
			</div>
	  	</div>
	</div>
<div class="clear"></div>	
<div class="clear"></div>
<div id="inline_reply_editor" style="display:none;">
<div class="CommentForm">
	<form id="form_inline_comment" action="/action/blog/add_comment?blog=24026" method="POST">
	  <input id="inline_reply_id" name="reply_id" value="" type="hidden">          
      <textarea name="content" style="width: 450px; height: 60px;"></textarea><br>
	  <input value="回复" id="btn_comment" class="SUBMIT" type="submit"> 
	  <input value="关闭" class="SUBMIT" id="btn_close_inline_reply" type="button"> 文明上网，理性发言
    </form>
</div>
</div>
<script type="text/javascript" src="js/blog.htm" defer="defer"></script>
<script type="text/javascript" src="js/brush.js"></script>
<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css">


</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>

</body></html>