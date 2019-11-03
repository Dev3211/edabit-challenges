<?php

function tallestSkyscraper($arr) {
	foreach($arr as $i => $element) {
   foreach($element as $x => $test) {
     if($arr[$i][$x] == 1){
				return count($arr) - $i;
			}
    }
  }
}

tallestSkyscraper([
  [0, 0, 0, 0],
  [0, 1, 0, 0],
  [0, 1, 1, 0],
  [1, 1, 1, 1]
]); //3
?>
