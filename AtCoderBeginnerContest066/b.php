<?php
fscanf(STDIN, "%s", $str);
$cnt = strlen($str);
for ($i = 1; $i < $cnt; $i++) {
  $str = substr($str, 0, strlen($str)-1);
  if (strlen($str)%2 == 1){
    continue;
  }
  $half_str = substr($str, 0, strlen($str)/2);
  if ($str == $half_str . $half_str) {
    echo strlen($str);
    break;
  }
}
