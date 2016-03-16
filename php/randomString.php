      <?php

function randomCharGenerator($seed){
	$length = count($seed);
	return chr($seed[rand(0,$length-1)]);
}

$temp = array();
$i=0;
while (count($temp) < 2){
	$randomChar = randomCharGenerator(array(rand(65,90), rand(97,122)));
	$length = count($temp);
	if($length == 0 || strtolower($temp[$length-1]) == strtolower($randomChar)){
		array_push($temp, $randomChar);
	}	
	else{
		unset($temp);
		$temp=array();
		array_push($temp, $randomChar);
}	
//print_r($temp);
	echo $randomChar;
$i++;
}

?>
