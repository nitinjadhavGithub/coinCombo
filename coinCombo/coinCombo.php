<?php
if(isset($argv[1]))
	$input=$argv[1];
	
	$inputInPaise=$input*100;

//$coins=array("1"=>1,"5"=>5,"10"=>10,"25"=>25,"50"=>50);
$coins=array(1,5,10,25,50);
$coins_limit=array("1"=>95,"5"=>19,"10"=>9,"25"=>3,"50"=>1);

/*foreach ($coins as $key => $value) {
	if($inputInPaise%$value==0)
	 {
	 	$noofCoins=$inputInPaise/$value;
	 	echo $value."*".$noofCoins."\n";
	 }	
}*/

$coins_reverse=array_reverse($coins);
$count=count($coins);

$dupArray=array();
$noofCoinsold="";
foreach ($coins as $key => $value) {
	
	//foreach ($coins_reverse as $keys => $values)
	for($j=$key+1;$j<$count;$j++) 
	 {
	 	$values=$coins[$j];
	 	if($value!=$values)
		{
			for($i=0;$i<=$coins_limit[$value];$i++) {

				$bal=$inputInPaise-$values*$i;
				if($bal%$value==0)
				 {
				 	$noofCoins=$bal/$value;
				 	
				 	if($noofCoins > 0 && $noofCoinsold != $noofCoins){
				 		if($i!=0){
				 			
				 			if(!in_array($value."*".$noofCoins, $dupArray))
				 				echo $values."*$i ".$value."*".$noofCoins."\n";

				 			$dupArray[]=$values."*$i ".$value."*".$noofCoins;
				 		}else{

				 				if(!in_array($value."*".$noofCoins, $dupArray))
				 					echo $value."*".$noofCoins."\n";

				 				$dupArray[]=$value."*".$noofCoins;
				 			}
				 	}

				 	$noofCoinsold=$noofCoins;
				 }else{ //tetsing else
				 		
				 		//echo "\n".$i." ".$value." ".$values." ".$bal."\n";
				 	foreach ($coins as $keyin => $valuein) {
				 		if($value != $valuein  && $values !=$valuein){

				 			$balIn=$inputInPaise-($value+$values);
				 			if($balIn%$valuein==0)
							 {
							 	$noofCoins=$balIn/$valuein;
							 	if(!in_array($value."*1 ".$values."*1 ".$valuein."*".$noofCoins, $dupArray))
							 		echo $value."*1 ".$values."*1 ".$valuein."*".$noofCoins."\n";

							 	$dupArray[]=$value."*1 ".$values."*1 ".$valuein."*".$noofCoins;
							 }else{  //1 else

							 	foreach ($coins as $keyin_1 => $valuein_1) {
							 	   if($value != $valuein  && $values !=$valuein && $valuein !== $valuein_1){	
								 	$balIn_1=$inputInPaise-($value+$values+$valuein);
								 	//echo "\n".$value." ".$values." ".$valuein." ".$balIn_1."\n";exit;
								 	if($balIn_1%$valuein_1==0)
									 {
									 	$noofCoins=$balIn_1/$valuein_1;
									 	if(!in_array($value."*1 ".$values."*1 ".$valuein."*1 ".$valuein_1."*".$noofCoins, $dupArray))
									 		echo $value."*1 ".$values."*1 ".$valuein."*1 ".$valuein_1."*".$noofCoins."\n";

									 	$dupArray[]=$value."*1 ".$values."*1 ".$valuein."*1 ".$valuein_1."*".$noofCoins;
									 }else{ //  2 else
									 	foreach ($coins as $keyin_2 => $valuein_2) {
							 	   			if($value != $valuein  && $values !=$valuein && $valuein !== $valuein_1 && $valuein_1 != $valuein_2){		
							 	   				$balIn_2=$inputInPaise-($value+$values+$valuein+$valuein_1);
							 	   				if($balIn_2%$valuein_2==0)
												 {
												 	$noofCoins=$balIn_2/$valuein_2;
												 	if($noofCoins > 0){
												 		if(!in_array($value."*1 ".$values."*1 ".$valuein."*1 ".$valuein_1."*1 ".$valuein_2."*".$noofCoins, $dupArray))
												 			echo $value."*1 ".$values."*1 ".$valuein."*1 ".$valuein_1."*1 ".$valuein_2."*".$noofCoins."\n";

												 		$dupArray[]=$value."*1 ".$values."*1 ".$valuein."*1 ".$valuein_1."*1 ".$valuein_2."*".$noofCoins;
												 	}
												 }

							 	   			}
							 	   		 }		

									 } // 2 else
								  } 
								} 

							 }	//1 else
				 		}
				 	}
				 	
				 }// tetsing else
			}	 	

		}	

			
	}	 
}






?>