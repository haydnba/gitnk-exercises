<?php

// looping on script so long as die not encountered

while (true) {

  // prompt user for input x 3 (num-1, num-2, operator)
  // validate input and exit if fail (e.g. non-numeric etc.)
  // NOTE! using trim() on all user input as windows creates space!

  echo "Enter a first whole number:\n";
  $num_1 = trim(stream_get_line(STDIN, 100, "\n"));
  if (!is_numeric($num_1)) {
    die("Sorry, the calculation requires a whole number!\n");
  }

  echo "Enter an operation to perform (+, -, *, /):\n";
  $user_op = trim(stream_get_line(STDIN, 100, "\n"));
  $valid_ops = ['+', '-', '*', '/'];
  if (!in_array($user_op, $valid_ops)) {
    die("Sorry, you  must enter a valid arithmetic operator!\n");
  }

  echo "Enter a second whole number:\n";
  $num_2 = trim(stream_get_line(STDIN, 100, "\n"));
  if (!is_numeric($num_2)) {
    die("Sorry, the calculation requires a whole number!\n");
  }

  // perform calculation and output result
  // further error checking - e.g. div by zero!
  // NOTE! parentheses on arithmetic expressions in concatenated string

  switch ($user_op) {
    case '+':
    echo "result is: " . ($num_1 + $num_2) . "\n";
    break;

    case '-':
    echo "result is: " . ($num_1 - $num_2) . "\n";
    break;

    case '*':
    echo "result is: " . ($num_1 * $num_2) . "\n";
    break;

    case '/':
    if ((int) $num_2 === 0) {
      die("Sorry, it is not possible to divide by zero!\n");
    }
    echo "result is: " . ($num_1 / $num_2) . "\n";
    break;
  }

  // alternative switch statement below to test result of expressions
  
  // switch (true) {
  //   case $user_op == '+':
  //   echo "result is: " . ($num_1 + $num_2) . "\n";
  //   break;

  //   case $user_op == '-':
  //   echo "result is: " . ($num_1 - $num_2) . "\n";
  //   break;

  //   case $user_op == '*':
  //   echo "result is: " . ($num_1 * $num_2) . "\n";
  //   break;

  //   case $user_op == '/':
  //   if ((int) $num_2 === 0) {
  //     die("Sorry, it is not possible to divide by zero!\n");
  //   }
  //   echo "result is: " . ($num_1 / $num_2) . "\n";
  //   break;
  // }

}