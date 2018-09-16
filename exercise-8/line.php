<?php

// prompt user for input
echo "Prompt\n";

// await input and store in var result
$result = stream_get_line(STDIN, 100, "\n");

// print result to screen
echo $result;