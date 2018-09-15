<?php

// declare and assign shopping basket array
$basket = [
  'White Bread' => 1.05,
  'Brown Bread' => 1.25,
  'Milk' => 1.00,
  'Cheese' => 2.75
];

// store £ symbol to be used in echo statement
$pound = chr(156);

// iterate shopping array and echo key value pairs
foreach($basket as $item => $price) {
  echo "The $item costs $pound$price\n";
}