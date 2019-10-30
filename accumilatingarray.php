<?php
function accumulatingArray($arr) {
	for ($x = 1; $x < count($arr); $x++) {
    $new = $arr[$x] + $arr[$x - 1];
    $arr[$x] = $new;
  }
  return $arr;
}

accumulatingArray([1, 5, 7]); //1, 6, 12
?>
