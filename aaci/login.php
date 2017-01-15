<meta charset="utf-8">
<style>
	*{
		margin:0;
		padding:0;
	}
	#d3{
		width:350px;
		height:150px;
		margin:100px auto;
		background:#ccc;
		padding-top:50px;
		padding-left:50px;
	}
	#d1{
		width:100px;
		height:30px;
		float:left;
		line-height:30px;
		text-align:center;
		margin-top:2px;
	}
	#d2{
		width:240px;
		height:20px;
		float:left;
	}
	#d4{
		width:240px;
		height:20px;
		text-align:center;
	}
	
</style>

<div id="d3">
<form action="login.php" method="post">
	
	用户名:<input type="text" name="name"><br />
	密&nbsp;码:<input type="password" name="pass"><br />
	<div id="d2">
	验证码:<input type="text" name="yanzheng">
	</div>
	<div id="d1">
		<img src="http://localhost/aaci/captcha.php">
	</div>
	<br />
	<div id="d4">
	<input type="submit" name="sub" value="登录">&nbsp;&nbsp;
	<input type="reset" name="rst" value="重置">
	</div>
	
	
</form>
</div>