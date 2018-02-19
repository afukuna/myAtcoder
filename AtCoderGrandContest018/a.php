<?php
$l1 = explode(' ', trim(fgets(STDIN)));
$l2 = explode(' ', trim(fgets(STDIN)));
$n = $l1[0];
$k = $l1[1];

$m = max($l2);

if ($k == $m) {
  $res = 'POSSIBLE';
} else if ($k > $m || count($l2) < 2) {
  $res = 'IMPOSSIBLE';
} else {
  //------------------
  // 最大公約数を求める
  //------------------
  // 値の昇順
  asort($l2);
  $v1 = array_pop($l2);
  $cnt = count($l2);
  for ($i = 0; $i < $cnt; $i++) {
    $v2 = array_pop($l2);

    //------------------
    // 2数の最大公約数を求める
    //------------------
    while (true) {
      if ($v1 == 0) {
        $g = $v2;
        break;
      }
      if ($v2 == 0) {
        $g = $v1;
        break;
      }

      if ($v1 == 1 || $v2 == 1) {
        $g = 1;
        break;
      }
      if ($v1 > $v2) {
        $v1 = $v1 % $v2;
        $v3 = abs($v2 - $v1);
      } else {
        $v2 = $v2 % $v1;
        $v3 = abs($v1 - $v2);
      }
      if ($v2 == $v3) {
        $g = $v3;
        break;
      }
      $v1 = $v2;
      $v2 = $v3;
    }
    $v1 = $g;
  }
  if ($g == 0) {
    $res = 'IMPOSSIBLE';
  } else if ($k % $g == 0) {
    $res = 'POSSIBLE';
  } else {
    $res = 'IMPOSSIBLE';
  }
}
echo $res;
