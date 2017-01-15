$(function(){
		$('#n1').blur(function(){
			//var name=$('#n1').val();
			var name=$('input')[0].value;
			var pass=$('input')[1].value;
			
			
			var data={'name':name,'pass':pass}
			$.post('<?php echo site_url('user/checkname')?>',data,function(data){
				//alert(typeof(data));
				//var obj=eval("("+data+")");
				console.log(data.pass);
				/*
				if(data=='success'){
					//console.log(123);
					var oSpan=$('<span>用户名重名</span>');
					$('#n1').after(oSpan);
				}*/
			},'json');
			//var oSpan=$('<span>用户名重名</span>');
			//$('#n1').after(oSpan);
			//console.log(oSpan);
			//$('#n1')[0].value;
			//alert(123);
		})
	})