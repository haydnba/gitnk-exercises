<?php

set_include_path(
  get_include_path() . PATH_SEPARATOR . __DIR__ . '/library/maths'
);

// include 'library/maths/mathsA.php';
// include 'library/maths/mathsB.php';
include 'mathsB.php';

use function library\maths\doMathsB;

function getInput($message) {
  echo "$message\t";
  return stream_get_line(STDIN, 10, PHP_EOL);
}


$userFirst = getInput('Please enter a first number');
$userOp = getInput('Please choose and operation');
$userLast = getInput('Please enter a second number');

$result = doMathsB($userFirst, $userLast, $userOp);

echo "The result of your calculation is $result\n";