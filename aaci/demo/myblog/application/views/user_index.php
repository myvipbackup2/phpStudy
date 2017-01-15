<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <base href="<?php echo site_url();?>"/>
  <title>Johnny的博客 - SYSIT个人博客</title>
  <base href="<?php echo site_url()?>"/>
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
<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
	<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
	<?php include 'top.php'?>
	</div>
	<div id="OSC_Content"><div class="SpaceChannel">
	<div id="portrait"><a href="adminIndex.htm"><img src="images/<?php echo $writer->IMG;?>" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></div>
    <div id="lnks">
		<strong><?php echo $writer->NAME;?>的博客</strong>
		<div>
			<a>博客列表</a>&nbsp;|
			<?php if($login_user&&$login_user->USER_ID!=$writer->USER_ID){?>
					<a href="message/into_msg?receiver=<?php echo $writer->USER_ID?>">发送留言</a>
				<?php }?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="BlogList">
<ul>
<?php 
	foreach($blogs as $blog){
?>
  <li class='Blog' id='blog_24027'>

	<h2 class='BlogAccess_true BlogTop_0'><a href="blog/view/<?php echo $blog->BLOG_ID;?>"><?php echo "$blog->TITLE";?></a></h2>

	<div class='outline'>

	  <span class='time'>发表于<?php echo "$blog->ADD_TIME"?></span>

	  <span class='catalog'>分类: <a href="?catalog=92334"><?php echo "$blog->CATALOG_NAME";?></a>|<a href="?catalog=92334"><?php echo "$blog->IS_YOURS";?></a></span>

	  <span class='stat'>统计: 0评/0阅</span>

	  	</div>

		<div class='TextContent' id='blog_content_24027'>

				<?php
				//echo "$blog->CONTENT"; 
					echo mb_strlen($blog->CONTENT)<20?$blog->CONTENT:mb_substr($blog->CONTENT,0, 20);
				
				?>

		<div class='fullcontent'><a href="blog/view/<?php echo $blog->BLOG_ID;?>">阅读全文...</a></div>

			</div>

	  </li>
  <?php 
	}
  ?>

</ul>
<div class="clear"></div>
	</div>
<div class="BlogMenu"><div class="admin SpaceModule">
	<?php
		$login_user=$this->session->userdata("login_user");
		if($login_user&&$writer->NAME==$login_user->NAME){?>
  <strong>博客管理</strong>
  <ul class="LinkLine">
	<li><a href="blog/newBlog">发表博客</a></li>
			<li><a href="blog/editCatalog">博客分类管理</a></li>
	<li><a href="blog/blogs">文章管理</a></li>
	<li><a href="blogComments.htm">网友评论管理</a></li>
	<?php }?>
</div>
<div class="catalogs SpaceModule">
  <strong>博客分类</strong>
  <ul class="LinkLine">
  		<?php foreach($cata as $catas){?>
    	<li><a href="#">
    		<?php echo $catas->NAME;?>(<?php echo $catas->BLOG_COUNT;?>)</a></li>
    	<?php }?>
		<li><a href="#">转贴的文章(0)</a></li>
		
	  </ul>
</div>
</div>
</div>
<div class="clear"></div>
<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css"></div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
</body></html>