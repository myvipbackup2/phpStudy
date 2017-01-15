
<?php
	//var_dump($_SESSION);
	//echo 123;
	if(!isset($_SESSION['id'])){
		header('user/login');
	}
?>

<?php
	//var_dump($blog);
	foreach($bloglist as $v){
?>
<h3><?php echo $v->title?></h3>
<p><?php echo $v->content?></p>
<hr />
<?php
	}
?>
<?php echo $this->pagination->create_links();?>

