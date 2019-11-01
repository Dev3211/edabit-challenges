<?php

function countSmileys($arr) {
	$possiblecombos = [':-D', ';~D', ':D', ';D', ':-)', ';~)', ':~)', ';-D', ':)', ';)'];
  $count = 0;

  foreach($arr as $element) {
   if(in_array($element, $possiblecombos)) {
     $count += 1;
   }
  }

  return $count;
}

countSmileys([":)", ";(", ";}", ":-D"]); //2
?>
