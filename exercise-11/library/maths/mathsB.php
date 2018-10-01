<?php

namespace library\maths;

function doMathsB($first, $second, $operator) {
  switch ($operator) {
    case '+':
      return $first + $second;
      break;
    case '-':
      return $first - $second;
      break;
    case '*':
      return $first * $second;
      break;
    case '/':
      return $first / $second;
      break;
  }
}