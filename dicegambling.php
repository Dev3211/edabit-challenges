<?php

function rolls($arr) {	
  $newarr = $arr;

	for($i = 1; $i < count($arr); $i++){
    switch($arr[$i - 1]) {
      case 1: $newarr[$i] = 0; break;
      case 6: $newarr[$i] = $newarr[$i] * 2; break;
    }
  }
  return array_sum($newarr);
}

rolls([1, 2, 3]); // 4
?>
