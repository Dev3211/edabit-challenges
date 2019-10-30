<?php
function countDigits($arr, $type) {
  switch($type) {
    case($type == "even"):
     foreach($arr as $i => $num){
       $count = 0;
      foreach (str_split($num) as $num2){
      if($num2%2 == 0) $count++;
    }
    $results[] = $count;
   }
   return $results;
   break;
   case($type == "odd"):
     foreach($arr as $i => $num){
       $count = 0;
      foreach (str_split($num) as $num2){
      if($num2%2 == 1) $count++;
    }
    $results[] = $count;
   }
   return $results;
   break;
  }
}

countDigits([22, 53, 99, 61, 777, 8], "odd"); // [0, 2, 2, 1, 3, 0
?>
