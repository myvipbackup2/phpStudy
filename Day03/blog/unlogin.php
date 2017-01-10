<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		setcookie('id',null);
		setcookie('name',null);
		
		echo "<script>location.href='index.php'</script>";
	}

?>