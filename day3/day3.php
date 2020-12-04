<?php
$data = file_get_contents('data.csv');
$maze = explode("\n", $data);
$maze = array_map(function($d) { return str_split($d); }, $maze);

$slopes = [[1, 1], [3, 1], [5, 1], [7, 1], [1, 2]];
$slopeCount = [];

foreach ($slopes as $slope) {
  $index = $treeCount = 0;  
  while ($slope[1] * $index < count($maze) - 1) {
      if ($maze[$slope[1] * $index][($slope[0] * $index) % count($maze[0])] === '#') $treeCount++;
      $index++; 
  }
  $slopeCount[] = $treeCount;
}

echo array_reduce($slopeCount, function($c, $i) { return $c * $i; }, 1);
