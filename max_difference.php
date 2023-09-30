<?php

function max_difference($arr) {
  if (count($arr) < 2) { return 0; }

  $minimum = $arr[0];
  $maxDiff = $arr[1] - $arr[0];

  foreach ($arr as $element) {
    if ($element - $minimum > $maxDiff) {
        $maxDiff = $element - $minimum;
    }
    if ($element < $minimum) {
        $minimum = $element;
    }
  }

  return $maxDiff;
}

$array = [1,2,3,4,5,8,9];

echo max_difference($array);

?>
