<?php
fscanf(STDIN, "%d", $n);

// 数字を1文字ずつ分割した和を求める
$sum = array_sum(str_split($n));

if ($n % $sum == 0) {
  echo 'Yes';
} else {
  echo 'No';
}
