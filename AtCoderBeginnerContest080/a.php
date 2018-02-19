<?php
fscanf(STDIN, "%d %d %d", $n, $a, $b);
// plan1
$p1 = $a * $n;
// plan2
$p2 = $b;

if ($p1 < $p2) {
  echo $p1;
} else {
  echo $p2;
}
