<?php

// randomly return one from a string of input characters
function randomChar(array $chars) {
  return $chars[rand(0, count($chars))];
}

// get character input from a user
function getUserChar(string $message, array $chars) {
  echo $message . "\n";
  $char = stream_get_line(STDIN, 10, PHP_EOL);
  if (!in_array($char, $chars)) {
    die('Sorry, invalid input, please start again');
  }
  return $chars;
}

// array holding acceptable characters
$rpsChars = ['R', 'P', 'S'];

// assoc. array mapping chars to readable string for output
$rpsReadable = [
  'R' => 'Rock',
  'P' => 'Paper',
  'S' => 'Scissors'
];

// generate machine hand
$machine = randomChar($rpsChars);
echo $machine;

// require human hand
$human = getUserChar('Please enter either R, P or S', $rpsReadable);
echo $human;