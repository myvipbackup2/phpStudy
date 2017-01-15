<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <base href="<?php echo site_url()?>"/>
  <title>博客设置/分类管理 Johnny的博客 - SYSIT个人博客</title>
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
<div class="MainForm BlogCatalogManage">
<form id="CatalogForm1" action="blog/create_cata" method="post">
    <h3> 添加博客分类 </h3>
    <div id="error_msg" class="error_msg" style="display:none;"></div>
    <label>分类名称:</label><input id="txt_link_name" name="name" value="-请添加-" size="15" tabindex="1" type="text">
    <span class="submit">
          <input value="添加&nbsp;»" tabindex="3" class="BUTTON SUBMIT" type="submit">
    </span>
</form>
<form class="BlogCatalogs">
<h3>博客分类 <span>(点击分类名编辑)</span></h3>
<table cellpadding="1" cellspacing="1">
	<tbody><tr>
		<th>序号</th>
		<th>分类名</th>
		<th>文章</th>
		<th>操作</th>
	</tr>
	<?php 
		$i=0;
		foreach($cata as $catas){?>
	<tr id="catalog_92334">
		<?php $i=$i+1;?>
		<td class="idx"><?php echo $i;?></td>
		<td class="name"><a href="blog/editCatalog1?cata_id=<?php echo $catas->CATALOG_ID?>" title="点击修改博客分类"><?php echo $catas->NAME;?></a></td>
		<td class="num"><?php echo $catas->BLOG_COUNT;?></td>
		<td class="opts">
			<a href="blog/editCatalog1?cata_id=<?php echo $catas->CATALOG_ID?>" title="点击修改博客分类">修改</a>
			<a href="blog/delete_cata?cata_id=<?php echo $catas->CATALOG_ID?>" onclick="return delete_catalog(154693,92334);">删除</a>
		</td>
	</tr>
	<?php }?>
	</tbody>
</table>
</form>
</div>
</div>
	<div class="clear"></div>
	<div id="OSC_Footer">© 赛斯特(WWW.SYSIT.ORG)</div>
</div>
<script type="text/javascript" src="js/space.htm" defer="defer"></script>

</body></html>