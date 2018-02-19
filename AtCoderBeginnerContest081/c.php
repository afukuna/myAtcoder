<?php
fscanf(STDIN, "%d %d", $n, $k);
$array = explode(' ', trim(fgets(STDIN)));
 
$count = 0;
 
// 何種類か確認
$syurui = count(array_unique($array));
if (isClear($k, $syurui) == false) {
  $arrayCountValues = array_count_values($array);
  sort($arrayCountValues);
  $valueCount = count($arrayCountValues);
  for ($i = 0; $i < $valueCount; $i++) {
    $count = $count + $arrayCountValues[$i];
    $syurui = $syurui - 1;
    if (isClear($k, $syurui)) {
      break;
    }
  }
}
 
function isClear($k, $syurui) {
  if ($k >= $syurui) {
    return true;
  }
  return false;
}
 
echo $count;
