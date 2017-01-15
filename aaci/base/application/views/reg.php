<meta charset="utf-8">
<base href="<?php echo site_url()?>">
<style>
	*{
		margin:0;
		padding:0;
	}
	#div1{
		width:300px;
		height:130px;
		margin:80px auto;
		background:#ccc;
		padding-top:50px;
		padding-left:50px;
	}
	#div2{
		margin-top:10px;
		text-align:center;
	}
</style>

<script src="asset/js/jquery.min.js" type="text/javascript"></script>

<div id="div1">
	<form action="<?php echo site_url('user/do_reg')?>" method="post">
		用户名&nbsp;:<input type="text" name="name" id="username"><br />
		密&nbsp;&nbsp;码:<input type="passwsord" name="pass"><br />
		重复密码:<input type="password" name="repass"><br />
		<div id="div2">
		<input type="submit" name="sub" value="注册">&nbsp;&nbsp;
		<input type="reset" name="rst" value="重置">
		</div>
		<img src="<?php echo site_url('user/cc')?>">
	</form>
</div>


<script type="text/javascript">
	$(function(){
		$('#username').blur(function(){
			//alert(123);
			//var name=$('#username').val();
			//console.log($(this));
			//var name=$('#username')[0].value;
			var name=$('#username').val();//.__proto__.val();
			$.post('<?php echo site_url("user/checkname")?>','name='+name,function(data){
				if(data=='error'){
					console.log('error');
				}else{
					console.log('ok');
				}
			},'text');
			//console.log(name);
			
			//$('#username')=Object.__proto__
			//$('#username').__proto__=$('#username').__proto__.__proto__
			//$.post('user/')
		})
	})
</script>