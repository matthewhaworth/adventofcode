<?php
$data = file_get_contents('data.csv');
$entries = explode("\n", $data);

$validCount = 0;

foreach ($entries as $entry) {
  if (!$entry) continue;
  $parts = [];  
  preg_match("/([0-9]*)-([0-9]*) ([a-z]): ([a-z]*)/", $entry, $parts);
  [, $min, $max, $requiredLetter, $password] = $parts;
  $letters = str_split($password);
  if ($letters[$min - 1] === $requiredLetter xor $letters[$max - 1] === $requiredLetter) $validCount++; 
}

echo $validCount . "\n";
