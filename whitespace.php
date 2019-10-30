<?php
function insertWhitespace($s) {
  return preg_replace('/([a-z])([A-Z])/s','$1 $2', $s);
}

insertWhitespace("SheWalksToTheBeach"); //She Walks To The Beach
?>
