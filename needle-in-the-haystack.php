<?php


	$res = findNeedle(['red', 'blue', 'yellow', 'black', 'grey'], 'blue');
	echo $res;


	function findNeedle($array,$filter){
		
		$key = array_search($filter, $array);
		return $key;
	}

?>