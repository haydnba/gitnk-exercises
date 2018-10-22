<?php

function convert($input) {
  if ($input === 0 || $input === 'r') return 'rock';
  if ($input === 1 || $input === 'p') return 'paper';
  if ($input === 2 || $input === 's') return 'scissors';
}

function result($comp, $human) {
  if ($comp == $human) return 'draw';
  if ($comp == 'rock' && $human == 'paper') return 'Human';
  if ($comp == 'rock' && $human == 'scissors') return 'Computer';
  if ($comp == 'paper' && $human == 'rock') return 'Computer';
  if ($comp == 'paper' && $human == 'scissors') return 'Human';
  if ($comp == 'scissors' && $human == 'rock') return 'Human';
  if ($comp == 'scissors' && $human == 'paper') return 'Computer';
}

$userChoice = $_REQUEST['choice'];

$userPlay = convert($userChoice);
$compPlay = convert(rand(0, 2));

$result = result($compPlay, $userPlay);

// echo "Source: $userChoice; Human: $userPlay; Comp: $compPlay; Result: $result";

if ($result == 'draw') {
  echo "Human played $userPlay and Computer played $compPlay: Game was a $result!";
} else {
  echo "Human played $userPlay and Computer played $compPlay: $result Wins!";
}
