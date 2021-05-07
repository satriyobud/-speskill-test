<?php

	$res = blueOcean([1,5,5,5,5,3], [5]);
	var_dump($res);
	function blueOcean($array, $filter){

		$res=array_diff($array,$filter);
		return $res;
	}

?>