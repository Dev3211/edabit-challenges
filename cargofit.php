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

  if($count > $arraysum || $count >= $arraysum) {
    return true;
  } else {
    return false;
  }
}

willFit(["M", "L", "L", "M"], [56, 62, 84, 90]); //true

?>
