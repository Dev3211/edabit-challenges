<?php

function getProducts($arr) {
  $result = array();
  for ($i = 0; $i < count($arr); $i++) {
        $result[] = 1;
        for ($j = 0; $j < $i; $j++) {
            $result[$i] *= $arr[$j];
        }
        for ($k = count($arr) - 1; $k > $i; $k--) {
            $result[$i] *= $arr[$k];
        }
    }
  return $result;
}
getProducts([1, 7, 3, 4]) //[84, 12, 28, 21]
?>
