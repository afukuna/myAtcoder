<?php
fscanf(STDIN, "%d %d", $a, $b);

if ($a > 2 && ($a % 3 == 0)) {
  echo 'Possible';
} elseif ($b > 2 && ($b % 3 == 0)) {
  echo 'Possible';
} elseif ($a + $b > 2 && (($a + $b) % 3 == 0)) {
  echo 'Possible';
} else {
  echo 'Impossible';
}
