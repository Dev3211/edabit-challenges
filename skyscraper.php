<?php

function tallestSkyscraper($arr)
{
	$sumArray = array();

	foreach ($arr as $k => $subArray) {
		foreach ($subArray as $id => $value) {
			array_key_exists($id, $sumArray) ? $sumArray[$id] += $value : $sumArray[$id] = $value;
		}
	}
	return max($sumArray);
}

tallestSkyscraper([
  [0, 0, 0, 0],
  [0, 1, 0, 0],
  [0, 1, 1, 0],
  [1, 1, 1, 1]
]); //3
?>
