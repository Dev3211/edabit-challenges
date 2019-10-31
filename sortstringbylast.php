<?php

function sortByLast($str) {
	$array = explode(' ', $str);
  
  usort ($array, function ($a, $b) {
       return strcmp(substr($a, -1), substr($b, -1));
  });

	return implode(' ', $array);
}

sortByLast("herb camera dynamic"); //camera herb dynamic

?>
