<?php
function alphabetIndex($str) {
  $empty = array();

	$words = str_word_count($str, 1);
  $words = implode(" ", $words);
  $words = preg_replace( '/[\W]/', '', $words);

  $split = str_split($words);
  $split = array_filter(array_map('trim', $split));
  
  foreach($split as $letter) {
   $empty[] = ord(strtoupper($letter)) - ord('A') + 1;
  }
  echo implode(' ', $empty);
}

alphabetIndex("Wow, does that work?") //23 15 23 4 15 5 19 20 8 1 20 23 15 18 11
?>
