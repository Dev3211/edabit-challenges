<?php

function averageWordLength($s)
{
	$words = str_word_count($s, 1);
	$arr = array();

	foreach ($words as $word) {
		$arr[] = strlen($word);
	}
	$arr = array_filter($arr);
	$average = array_sum($arr) / count($arr);
	echo number_format($average, 2, '.', '');
}

averageWordLength('"Dude, this is so awesome!'); //3.80

?>
