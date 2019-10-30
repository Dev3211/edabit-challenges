<?php
function splitGroups($str) {
	$split = preg_match_all('/((.)\2*)/', $str, $m);
  return $m[0];
}  

splitGroups("5556667788") // [555, 666, 77, 88]

?>
