<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);

$ary[] = $a + $b;
$ary[] = $a + $c;
$ary[] = $b + $c;

echo min($ary);
