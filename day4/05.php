<?php
/*
# Logic & Conditionals
*/

// Boolean review
$true = true;
$false = false;

echo $true, "<br>"; // Echoes "1"
echo $false, "<br>"; // Ecoes nothing

// Testing
if ( true ){
	echo "Yes, it's true!", "<br>";
}

if ( false ){
	echo "You will never see this message."; // Doesn't execute
}

// Let's look at it another way:

$show_it = true;

if ( $show_it ){
	echo "Yes! (1)", "<br>"; // Executes
}

$show_it = false;

if ( $show_it ){
	echo "Yes! (2)", "<br>"; // Doesn't execute
}

// Negation

if ( ! $show_it ){
	echo "No!", "<br>"; // Executes
}

// Else

if ( $show_it ){
	echo "Showing it", "<br>"; // Doesn't execute
} else {
	echo "Not showing it", "<br>"; // Displays
}

$show_it = true;

if ( $show_it ){
	echo "Showing it", "<br>"; // Displays
} else {
	echo "Not showing it", "<br>"; // Doesn't execute
}


