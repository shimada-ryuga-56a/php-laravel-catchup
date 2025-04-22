<?php
$colors = ["red", "green", "blue"];

echo "=== Colors ===\n";
foreach ($colors as $color) {
  echo "Color: {$color} \n";
}

echo "\n";

$person = [
  'name' => 'Taro',
  'age' => 30,
  'city' => 'Tokyo'
];

echo "=== Person ===\n";
foreach ($person as $key => $value) {
  echo "{$key}: {$value}\n";
}