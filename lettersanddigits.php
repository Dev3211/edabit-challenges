<?php

function countAll($str) {
  preg_match_all('/[A-Za-z]/', $str, $letters);
  preg_match_all('/\d/i', $str, $int);
  return array("LETTERS" => count($letters[0]), "DIGITS" => count($int[0]));
}

countAll("H3ll0 Wor1d"); // array("LETTERS" =>  7, "DIGITS" => 3)
?>
