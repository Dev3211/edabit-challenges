<?php
function abacabaPattern($n) {
	$alphabets = range('A', 'Z');
  $string = '';
  
  for ($x = 0; $x < count($alphabets); $x++) {
    if($x < $n) {
      $string = $string . $alphabets[$x] . $string;
    }
  }
  return $string;
}

abacabaPattern(3); // ABACABA

?>
