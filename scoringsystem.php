<?php
function calculateScores($str) {
	$arr = array();

  array_push($arr, substr_count($str, "A"), substr_count($str, "B"), substr_count($str, "C"));
  
  return $arr;
}

calculateScores("ABCBACC") //[2, 2, 3]
?>

