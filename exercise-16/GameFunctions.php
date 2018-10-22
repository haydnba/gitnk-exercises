<?php

function convert($input) {
  if ($input == 0 || $input == 'r') return 'rock';
  if ($input == 1 || $input == 'p') return 'paper';
  if ($input == 2 || $input == 's') return 'scissors';
}

function result($comp, $human) {
  if ($comp == $human) return 'draw';
  if ($comp == 'rock' && $human == 'paper') return 'human';
  if ($comp == 'rock' && $human == 'scissors') return 'comp';
  if ($comp == 'paper' && $human == 'rock') return 'comp';
  if ($comp == 'paper' && $human == 'scissors') return 'human';
  if ($comp == 'scissors' && $human == 'rock') return 'human';
  if ($comp == 'scissors' && $human == 'paper') return 'comp';
}

$userChoice = $_REQUEST['choice'];

