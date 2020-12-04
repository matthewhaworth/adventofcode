<?php
$data = file_get_contents('data.csv');
$entries = explode("\n", $data);

$validCount = 0;

foreach ($entries as $entry) {
  if (!$entry) continue;
  $parts = [];  
  preg_match("/([0-9]*)-([0-9]*) ([a-z]): ([a-z]*)/", $entry, $parts);
  $min = $parts[1];
  $max = $parts[2];
  $requiredLetter = $parts[3];
  $password = $parts[4];
  $count = substr_count($password, $requiredLetter);
  if ($count >= $min && $count <= $max) $validCount++;
}

echo $validCount . "\n";
