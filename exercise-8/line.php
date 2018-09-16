<?php

// prompt user for input
echo "Tell me something...\n";

// await input and store in var result
$result = stream_get_line(STDIN, 100, "\n");

// print result to screen
echo "You entered the following: $result\n";
