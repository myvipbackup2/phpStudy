<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>	
	<title></title>
	<body>
		<div id="AdminPath">
	    	<?php $login_user=$this->session->userdata("login_user");?>
	        <a href="user/user_index?writer=<?php echo $login_user->USER_ID;?>">返回我的首页</a>&nbsp;»
	    	<span id="AdminTitle">管理首页</span>
   		 </div>
	    <div id="AdminMenu"><ul>
			<li class="caption">个人信息管理		
				<ol>
					<li><a href="blog/outBox?user=<?php echo $login_user->USER_ID;?>">站内留言</a></li>
					<li><a href="user/check_infor">编辑个人资料</a></li>
					<li><a href="user/chpwd">修改登录密码</a></li>
					<li><a href="user/usersetting">网页个性设置</a></li>
				</ol>
			</li></ul>		
			
			<ul>
				<li class="caption">博客管理	
					<ol>
						<li><a href="blog/newBlog">发表博客</a></li>
						<li><a href="blog/editCatalog">博客设置/分类管理</a></li>
						<li><a href="blog/blogs">文章管理</a></li>
						<li><a href="blog/blogComments">博客评论管理</a></li>
					</ol>
				</li>
			</ul>
		</div>
    </body>
</html>