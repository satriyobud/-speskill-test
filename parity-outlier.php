<?php

// $res = find([11, 13, 15, 19, 9, 13, -21]);
$res = find([160, 3, 1719, 19, 11, 13, -21]);
// $res = find([2, 4, 0, 100, 4, 11, 2602, 36]);

echo $res;

function find($integers) {
  $evenArray = [];
  $oddArray = [];

  foreach ($integers as $integer) {
    if ($integer % 2 === 0) {
      $evenArray[] = $integer;
    } else {
      $oddArray[] = $integer;
    }
  }

  if (count($evenArray) === 1) {
    return $evenArray[0];
  }elseif (count($oddArray) === 1) {
  return $oddArray[0];
    # code...
  }else{
    return 'false';
  }

}

?>