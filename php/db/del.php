<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="delete from blog where wid='$id'";
		$query=mysqli_query($link,$sql);
		if($query){
			header('location:index.php');
		}
	}

?>