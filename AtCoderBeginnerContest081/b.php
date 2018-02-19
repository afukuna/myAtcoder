<?php
fscanf(STDIN, "%d", $n);
$array = explode(' ', trim(fgets(STDIN)));

$count = 0;

if (isGusu($array)) {
  while (true) {
    $count++;
    for ($i = 0; $i < $n; $i++) {
      $array[$i] = $array[$i] / 2;
    }
    if (isGusu($array) == false) {
      break;
    }
  }
}

function isGusu($array) {
  $len = count($array);
  for ($i = 0; $i < $len; $i++) {
    if ($array[$i] % 2 == 1) {
      return false;
    } 
  }
  return true;
}

echo $count;
