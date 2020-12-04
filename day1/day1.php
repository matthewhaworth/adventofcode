<?php
$numbersText = file_get_contents('day1input.txt');
$numbers = explode("\n", $numbersText);

function getNumberPairs($numbers, $searchNumber) {
  foreach ($numbers as $number) {
    $number = (int) $number;  
    $numberToFind = $searchNumber - $number;
    if (in_array($numberToFind, $numbers)) {
      return [$numberToFind, $number];
    }
  }
  return false;
}

foreach ($numbers as $number) {
  if ($foo = getNumberPairs($numbers, 2020 - (int)$number)) {
    break;
  }
}
lar_dump($foo, $number);
echo $foo[0] * $foo[1] * (int) $number;
