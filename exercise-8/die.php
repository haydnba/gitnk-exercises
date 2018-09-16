<?php

// prompt user for input
echo "Prompt...\n";

// kill program before rest of the script can execute
die('THE PROGRAM IS EXITING!');

// never make it ithis far...
$result = stream_get_line(STDIN, 100, "\n");

// definitely never make it this far../
echo $result;
