<?php
fscanf(STDIN, "%d", $n);
$l2 = explode(' ', trim(fgets(STDIN)));

$cnt_multiples_of_4 = 0;
$cnt_2 = 0;
$cnt_other = 0;

for ($i = 0; $i < $n; $i++) {
  if ($l2[$i] % 4 == 0) {
    $cnt_multiples_of_4++;
    continue;
  }
  if ($l2[$i] % 2 == 0) {
    $cnt_2++;
    if ($cnt_2 > 1) {
      continue;
    }
  }
  $cnt_other++;
}

if ($cnt_other - 2 < $cnt_multiples_of_4) {
  $res = 'Yes';
} else {
  $res = 'No';
}
echo $res;
