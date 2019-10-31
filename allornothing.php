<?php

function possiblyPerfect($key, $answers) {
	$count = count($key);
  $count1 = 0;
  $count2 = 0;

  foreach ($key as $i => $answer){
    if($answer == "_") {
			$count1++;
			$count2++;
    }elseif($answer == $answers[$i]) {
      $count1++;
    } else {
			$count2++;
		}
  }

  return ($count1 == $count || $count2 == $count);
}

possiblyPerfect(["B", "A", "_", "_"], ["B", "A", "C", "C"]) //true

?>
