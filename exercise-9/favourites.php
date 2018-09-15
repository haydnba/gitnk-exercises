<?php

// declare empty array to hold the favourites
$favourites = [];

// prompt user and store first value
echo "What is your favourite colour?\n";
$favourites[] = stream_get_line(STDIN, 100, "\n");

// prompt user and store second value
echo "What is your favourite food?\n";
$favourites[] = stream_get_line(STDIN, 100, "\n");

// prompt user and store third value
echo "What is your favourite place?\n";
$favourites[] = stream_get_line(STDIN, 100, "\n");

// iterate over array and echo each item using:
// for loop:
for ($i = 0; $i < count($favourites); $i++) {
  echo "$favourites[$i]\n";
}
// foreach loop:
foreach($favourites as $item) {
  echo "$item\n";
}

// var_dump($favourites);