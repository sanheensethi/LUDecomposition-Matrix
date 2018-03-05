<?php
echo "<h1><u>Crout's Method</u></h1>";
$matrix = [
			[1,2,3],
			[4,5,6],
			[7,8,9]
		  ];
		  
		$m = count($matrix);
		$n = count($matrix[0]);
	for($i=0;$i<$m;$i++){
		//upper
		for($j=0;$j<$n;$j++){
			$sum = 0;
			for($p=0;$p<$i;$p++){
				$sum+=$lower[$i][$p]*$upper[$p][$j];
			}
			$upper[$i][$j] = $matrix[$i][$j] - $sum;
		}
		//lower
		for($j=0;$j<$n;$j++){
			if($i==$j){
				$lower[$i][$i] = 1;
			}else{
			$sum = 0;
			for($p=0;$p<$i;$p++){
				$sum+=$lower[$j][$p]*$upper[$p][$i];
			}
			if($upper[$i][$i] == 0){
				$u = 1;
			}else{
				$u= $upper[$i][$i];
			}
			$lower[$j][$i] = ($matrix[$j][$i] - $sum)/$u;
			}
		}
	}
echo "<h2>[A] : Given Matrix</h2>";
foreach($matrix as $mat){
	foreach($mat as $m){
		echo $m. " | ";
	}
	echo "<br>";
}
echo "<h2>[L] : Lower Triangular Matrices after Decomposition</h2>";
foreach($lower as $low){
	foreach($low as $l){
		echo $l." | ";
	}
	echo "<br>";
}
echo "<h2>[U] : Upper Triangular Matrices after Decomposition</h2>";
foreach($upper as $up){
	foreach($up as $u){
		echo $u." | ";
	}
	echo "<br>";
}

echo "<h2>Decomposition is Such That [A] = [L][U]</h2>";

echo "<p style='color:red'>Reference : Numerical Analysis IIIrd year 6<sup>th</sup> sem. [B.Sc.]</p>";
?>