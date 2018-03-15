<?php

//Storing remainder in array

function mymod($number1,$number2,$mod) {
	$list = [];
	for ($x = $number1; $x <= $number2; $x++) {
		array_push($list, $x%$mod);
	}
	return $list;	
}
$start = 17;
$end = 53;
// get modulus of 2 array
$mod2 = mymod($start,$end,2);
// get modulus of 5 array
$mod5 = mymod($start,$end,5);
// set counter
$counter = 0;

for ($x = $start; $x <= $end; $x++) {
	if (!$mod2[$counter] && !$mod5[$counter]) 
		echo "foobar"."<br>"; 
	elseif (!$mod2[$counter]) 
		echo "foo"."<br>";
	elseif (!$mod5[$counter]) 
		echo "bar"."<br>";
	else 
		echo $x."<br>";
	$counter = $counter + 1;
}	

?>