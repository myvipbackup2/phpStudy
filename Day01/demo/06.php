<?php
	//phpinfo();
	if(isset($_POST['sub'])){
		$url=$_POST['url'];
		echo $url."<br />";
		
		// echo base64_encode($url);
		// die();
		//thunder://aHR0cDovL3d3dy4xNjMuY29tLzEucm12Yg==
		
		$url1=substr($url,10);
		
		//echo $url1;
		//die();
		$u=base64_decode($url1);
		//echo $url1;
		//$u="thunder://".$url1;
		echo $u;
		
	}

?>
<meta charset="utf-8">
<form action="06-base64编码.php" method="post">
	url:<input type="text" name="url">
	<input type="submit" name="sub" value="转换">
</form>

