<?php
	// echo "<pre>";
	// var_dump($_SERVER);
	// echo "</pre>";
	$ss=$_SERVER['REQUEST_URI'];
	$arr=explode("?",$ss);
	$yy=$arr[1];
	$zz=explode('=',$yy);
	$r=$zz[1];
	
	function checkname($str,$r){
		$arr1=array('%','&');
		$flag=false;
		
		for($i=0;$i<strlen($r);$i++){
			for($j=0;$j<count($arr1);$j++){
				if($r[$i]==$arr1[$j]){
					//echo "<script>alert('输入非法')</script>";
					//break;
					$flag=true;
				}
			}
		}
		
		if($flag==true){
			echo "<script>alert('输入非法')</script>";
		}
	}
	
	$str='s';
	switch($str){
		case 's':
			checkname($str,$r);
			break;
		default:
			echo "error";
			break;
	}
	
	//$str=$_SERVER['REQUEST_URI'];
	//$arr=explode('?',$str);
	//var_dump($arr);
	//echo $arr[1];
	 //$arr=array(1,2,3);
	 
	 // echo "<pre>";
	 // print_r($arr);//只能输出标量类型
	 // echo "</pre>";	
	 
	 //var_dump($arr);
	//类型的转换
	//四个标量类型：int float string bool
	//两个复合类型：array  object
	//两个特殊类型：resource null
	
	//string->int  int->string  ""
	// $num="1999";
	// var_dump($num);
	// echo "<br />";
	// $bb=settype($num,'int');
	// if($bb){
		// var_dump($num);
	// }
	
	//string->array   array->string
	// $str="laoshan";
	// $arr=array();
	// for($i=0;$i<strlen($str);$i++){
		// $arr[$i]=$str[$i];
	// }
// 	
	// echo "<pre>";
	// print_r($arr);
	// echo "</pre>";
	
	
	// $arr=array('l','a','o');
	// $str="";
	// for($i=0;$i<count($arr);$i++){
		// $str.=$arr[$i];
	// }
// 	
	// echo $str;
	
	//http://localhost/index.php?name=laoshan&age=19
	//name=laoshan&age=19   {'name':'laoshan','age':19} 序列化与反序列化
	//$_SERVER;
	//https://www.baidu.com/s?wd=javascript
	//http://localhost/lstest/day1/02-test.php?year=1999
	//http://localhost/user/login/1999  restful
	
	//问题1：index.php ->s  
	//select * from user where name=laoshan and pass= or 1=1
	
	//桌面  %3d%2c%5e
	
	

?>