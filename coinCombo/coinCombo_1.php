<?php
if(isset($argv[1]))
	$input=$argv[1];
	
	$inputInPaise=$input*100;

//$coins=array("1"=>1,"5"=>5,"10"=>10,"25"=>25,"50"=>50);
$coins=array(1,5,10,25,50);
foreach ($coins as $key => $value) {
	if($inputInPaise%$value==0)
	 {
	 	$noofCoins=$inputInPaise/$value;
	 	echo $value."*".$noofCoins."\n";
	 }	
}

$v=array_reverse($coins);

foreach ($coins as $key => $value) {

	foreach ($v as $keys => $values) {
		if($value!=$values)
		{
			$bal=$inputInPaise-$values;
			if($bal%$value==0)
			 {
			 	$noofCoins=$bal/$value;
			 	echo $values."*1 ".$value."*".$noofCoins."\n";
			 }


			$bal1=$inputInPaise-$values*2;
			if($bal1%$value==0)
			 {
			 	$noofCoins=$bal1/$value;
			 	if($noofCoins!==0)
			 		echo $values."*2 ".$value."*".$noofCoins."\n";
			 }	

			$bal2=$inputInPaise-$values*3;
			if($bal2%$value==0)
			 {
			 	$noofCoins=$bal2/$value;
			 	if($noofCoins > 0)
			 		echo $values."*3 ".$value."*".$noofCoins."\n";
			 } 

			$bal3=$inputInPaise-$values*4;
			if($bal3%$value==0)
			 {
			 	$noofCoins=$bal3/$value;
			 	if($noofCoins > 0)
			 		echo $values."*4 ".$value."*".$noofCoins."\n";
			 } 

			$bal4=$inputInPaise-$values*5;
			if($bal4%$value==0)
			 {
			 	$noofCoins=$bal4/$value;
			 	if($noofCoins > 0)
			 		echo $values."*5 ".$value."*".$noofCoins."\n";
			 } 
			 
		}	

			
	}	 
}






?>