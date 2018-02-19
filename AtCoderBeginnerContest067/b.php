<?php
$l1 = explode(' ', trim(fgets(STDIN)));
$l2 = explode(' ', trim(fgets(STDIN)));
$n = $l1[0];
$k = $l1[1];

arsort($l2, SORT_NUMERIC);
$res = 0;
for ($i = 0; $i < $k; $i++) {
  $res += array_shift($l2);
}

echo $res;
