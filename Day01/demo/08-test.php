<?php
	// for($i=1;$i<=9;$i++){
		// for($j=1;$j<=$i;$j++){
			// echo $i." * ".$j." = ".($i*$j)."&nbsp;";
		// }
		// echo "<br />";
	// }
	$color="";
	echo "<table width=1000 align='center' border='1'>";
	for($i=1;$i<=9;$i++){
		if($i % 2==0){
			$color="red";
		}else{
			$color="pink";
		}
		echo "<tr bgColor=".$color.">";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".($i*$j)."&nbsp;";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "<table>";

?>
