<?php

// define a multidimensional family array
$family = [
  ['Gay', 65, 'silver'],
  ['Jonner', 72, 'grey-brown'],
  ['Olivia', 32, 'auburn']
];

// iterate and echo sub array values
foreach($family as $member => list($name, $age, $hair)) {
  echo "$name is $age years old and has $hair coloured hair\n";
}

// print_r($family);