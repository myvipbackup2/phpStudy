<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>	
	<title></title>
	<body>
	<?php $login_user=$this->session->userdata("login_user");?>
	<div id="OSC_Banner">
	    <div id="OSC_Slogon">博客 Blog</div>
	    <div id="OSC_Channels">
	        <ul>
	        <?php if($login_user){
				?>
	        <li><a href="#" class="project">我的小情緒：<?php echo $login_user->MOOD;?></a></li>
	        <?php }?>
	        </ul>
	    </div>
	    <div class="clear"></div>
	</div><!-- #EndLibraryItem --><div id="OSC_Topbar">
	<div id="VisitorInfo">
		当前访客身份：
				<?php
					$login_user=$this->session->userdata("login_user");
					if($login_user){
				?>
					<?php echo $login_user->NAME;?>[<a href="user/logout">退出</a>|<a href="user/adminIndex">个人中心</a>]
				<?php
					}else{
				?>
					游客[<a href="user/login">登陆</a>|<a href="user/logout">退出</a>]
				<?php
					}
				?>
			<a href="inbox.htm" class="msgbox" title="进入我的留言箱">你有<em>0</em>新留言</a>
					
	</div>
	<div id="SearchBar">
    		<form action="Search">
								<input name="user" value="154693" type="hidden">
																								<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索" onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value" onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">
				<input class="SUBMIT" value="搜索" type="submit">
    		</form>
	</div>
	<div class="clear"></div>
	</body>
</html>