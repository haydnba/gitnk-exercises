<?php

function validateInput(array $terms, string $input) {
  if (!array_key_exists($input, $terms)) {
    echo "Sorry, please enter a valid input\n";
    return;
  }
  return $input;
}

function generatePlay(int $num) {
  return $num < 1 ? 'R' : ($num > 1 ? 'S' : 'P');
}

function getResult(array $outcomes, array $terms, ...$plays) {
  $winning = $outcomes[implode($plays)];
  if (strlen($winning) === 2) {
    return "Draw: both played " . $terms[$winning[1]] ."\n";
  }
  if ($winning === $plays[0]) {
    return "Human won with $terms[$winning]\n";
  }
  if ($winning === $plays[1]) {
    return "Machine won with $terms[$winning]\n";
  }
}

function storeRound(array $round, string $result) {
  return [
    'human' => $round[0], 
    'machine' => $round[1],
    'result' => $result
  ];
}

// assoc. array maps short input => readable game terms
$gameTerms = [
  'Y' => 'Yes',
  'N' => 'No'
];

// assoc. array maps short input => readable hand terms
$playTerms = [
  'R' => 'Rock',
  'P' => 'Paper',
  'S' => 'Scissors'
];

// assoc. array maps cartesian product of hands => winner
$playResult = [
  'RR' => 'DR', 'RP' => 'P', 'RS' => 'R',
  'PR' => 'P', 'PP' => 'DP', 'PS' => 'S',
  'SR' => 'R', 'SP' => 'S', 'SS' => 'DS'
];

// empty array to hold game
$complete = NULL;

// array to hold sequence of rounds
$game = [];

// loop on game rounds
while (!$complete) {

  // array to hold hands from round
  $round = [NULL, NULL];

  // loop exits on valid player input - play hand
  while (!$round[0]) {
    echo "Rock - 'R', Paper - 'P', Scissors - 'S'\n";
    $round[0] = validateInput($playTerms, stream_get_line(STDIN, 10, PHP_EOL));
  }

  // store machine input - play hand
  $round[1] = generatePlay(rand(0, 2));

  // print the hands
  echo 'Machine played: ' . $playTerms[$round[1]] . PHP_EOL;
  echo 'Human played: ' . $playTerms[$round[0]] . PHP_EOL;

  // generate and print the result message
  $result = getResult($playResult, $playTerms, ...$round);
  echo $result;

  // store result in game array
  $game[] = storeRound($round, $result);

  // anticipate player choice to continue or not
  $continue = NULL;

  // loop exists on valid player input
  while (!$continue) {
    echo "Would you like to continue? [Y, N]\n";
    $continue = validateInput($gameTerms, stream_get_line(STDIN, 10, PHP_EOL));
  }

  // if user wants to quit, exit loop
  if ($continue === 'N') {
    $complete = TRUE;
  }

}

// output entire game result
print_r($game);

