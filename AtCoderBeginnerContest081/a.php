<?php
fscanf(STDIN, "%s", $n);

$count = 0;
if ($n[0] == 1) $count++;
if ($n[1] == 1) $count++;
if ($n[2] == 1) $count++;

echo $count;
