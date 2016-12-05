<?php
	if(isset($_POST['sub'])){
		$year=$_POST['year'];
		
		if(is_numeric($year)){
			if($year % 400 ==0 || ($year %4==0 && $year % 100 !=0)){
				echo $year."是闰年";
			}else{
				echo $year."不是闰年";
			}
		}else{
			echo "输入非法";
		}
	}	
		

?>


<meta charset="utf-8">
<form action="04-test.php" method="post">
	year:<input type="text" name="year">
	<input type="submit" name="sub" value="提交">
</form>