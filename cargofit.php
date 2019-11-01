<?php

function willFit($holds, $cargo) {
  $count = 0;
  $arraysum = array_sum($cargo);
  
  foreach($holds as $key) {
    switch($key) {
      case "L": $count += 200; break;
      case "M": $count += 100; break;
      case "S": $count += 50; break;
    }
  }
  $results = ($count > $arraysum || $count>= $arraysum) ? true : false;
  return $results;
}

willFit(["M", "L", "L", "M"], [56, 62, 84, 90]); //true

?>
