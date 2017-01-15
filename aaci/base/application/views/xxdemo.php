<meta charset="utf-8">
<form action="<?php echo site_url('user/do_xxdemo.php')?>" method="post">
	用户名:<input type="text" name="name" id="n1">
</form>



<script>
	var oName=document.getElementById('n1');
	var flag=true;
	oName.onblur=function(){
		//console.log(this.value);
		var arr=[' ','%','$','='];
		var v=this.value;
		//console.log(v.length);
		for(var i=0;i<v.length;i++){
			for(var j=0;j<arr.length;j++){
				if(v[i]==arr[j]){
					//alert('laoshan love laoxie');
					flag=false;
				}
			}
		}
		if(flag==false){
			console.log('laoshan hurts laoxie');
		}
	}
</script>