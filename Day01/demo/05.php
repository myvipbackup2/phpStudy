<?php
	if(isset($_POST['sub'])){
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$ysf=$_POST['ysf'];
		$sum=0;
		switch($ysf){
			case '+':
				$sum=$num1+$num2;
				break;
			case '-':
				$sum=$num1-$num2;
				break;
			case '*':
				$sum=$num1*$num2;
				break;
			case '/':
				$sum=$num1/$num2;
				break;
			default:
				echo "没有这个云算符";
				break;
		}
		//echo $ysf;
		//echo $sum;
	}


?>


<html>
	<head>
		<meta charset="utf-8">
		<title>计算器</title>
		<style>
			*{
				margin:0;
				padding:0
			}
			#div1{
				width:600px;
				height:44px;
				margin:0 auto;
				background:pink;
				margin-top:100px;
			}
		</style>
	</head>
	<body>
		<div id="div1">
			<table width=400 align='center' border='1'>
			<form action="05-计算器.php" method="post">
				<tr>
					<td>num1:<input type="text" name="num1" value=<?php echo $num1?>></td>
					<td>
						<select name="ysf">
							<option value="+" <?php if($ysf=='+'){echo 'selected';}?>>+</option>
							<option value="-" <?php if($ysf=='-'){echo 'selected';}?>>-</option>
							<option value="*" <?php if($ysf=='*'){echo 'selected';}?>>×</option>
							<option value="/" <?php if($ysf=='/'){echo 'selected';}?>>/</option>
						</select>
					</td>
					<td>num2:<input type="text" name="num2" value=<?php echo $num2?>></td>
					<td>sum:<input type="text" name="sum" value=<?php echo $sum?>></td>
					<td><input type="submit" name="sub" value="计算"></td>
				</tr>
				
				
			</form>
			</table>
		</div>
	</body>
</html>
	
