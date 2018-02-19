<?php
fscanf(STDIN, "%s", $s);
$cnt = strlen($s) -2;
$start = substr($s,  0, 1);
$end   = substr($s, -1, 1);
echo $start . $cnt . $end;
