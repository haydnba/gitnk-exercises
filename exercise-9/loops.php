<?php

// initialise counter at -1;
$i = -1;

// increment counter while less than or equal to twelve
// and echo counter - tab - counter squared - newline -
while (++$i <= 12) {
  echo $i . "\t" . ($i**2) . "\n";
}