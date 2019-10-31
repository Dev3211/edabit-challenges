<?php
function duplicateCount($str)
{
	$count = 0;
	foreach (count_chars($str, 1) as $strr => $value) {
		if ($value > 1) $count++;
	}
	echo $count;
}

duplicateCount("aabbcde") //2
?>
