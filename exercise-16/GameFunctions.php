<?php

function convert($input) {
  if ($input == 0) return 'rock';
  if ($input == 1) return 'paper';
  if ($input == 2) return 'scissors';
}

function getResult($comp, $human) {
  if ($comp == $human) return [$comp, $human, 'draw'];
  if ($comp == 'rock' && $human == 'paper') return [$comp, $human, 'Human'];
  if ($comp == 'rock' && $human == 'scissors') return [$comp, $human, 'Computer'];
  if ($comp == 'paper' && $human == 'rock') return [$comp, $human, 'Computer'];
  if ($comp == 'paper' && $human == 'scissors') return [$comp, $human, 'Human'];
  if ($comp == 'scissors' && $human == 'rock') return [$comp, $human, 'Human'];
  if ($comp == 'scissors' && $human == 'paper') return [$comp, $human, 'Computer'];
} 

$result = getResult(convert(rand(0, 2)), convert($_REQUEST['choice']));

if ($result[2] == 'draw') {
  echo "Human played $result[1] and Computer played $result[0]: Game was a $result[2]!";
} else {
  echo "Human played $result[1] and Computer played $result[0]: $result[2] Wins!";
}
