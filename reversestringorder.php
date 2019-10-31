<?php

function reverse($str) {
  $uni = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);

  for($i=0; $i < count($uni) / 2; $i++){
    $tmp = $uni[$i];
    $uni[$i] = $uni[count($uni) - $i - 1];
    $uni[count($uni) - $i - 1] = $tmp;
  }
  return implode($uni);
}

reverse("Edabit is really helpful!"); // !lufpleh yllaer si tibadE
?>
