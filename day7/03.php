<?php
$favourite_drinks = array(
	"Jane" => array( "White Russian", "Screwdriver", "Sea Breeze" ),
	"Tom" => array( "White Russian", "Mad Monk", "Cuba Libre" ),
	"James" => array( "Baileyrouskie", "Gin and Tonic", "Sloe Screw" ),
	"Daphne" => array( "Sombrero", "Mad Monk", "Champagne Royale" ),
	"Tanja" => array( "Gin and Tonic", "B-52", "Amber Daiquiri" ),
	"Tim" => array( "Cuba Libre", "Sloe Screw", "B-52", ),
	"Tony" => array( "Greyhound", "Harvey Wallbanger", "Long Island Iced Tea" )
);

$daphnes_drinks = $favourite_drinks['Daphne'];

echo "<ul>";
foreach ( $daphnes_drinks as $drink ){
	echo "<li>$drink</li>";
}
echo "</ul>";

/*
 * Okay, so that works for Daphne. Can we do something more general that would
 * work for ANY of our friends?
 *
 * Write a function that allows us to pass the friend's name as the
 * FUNCTION ARGUMENT, and have the function output the same structure
 * that we're using for Daphne's favourite drinks.
 *
 * CHALLENGE: how do we tell the function WHICH friend we want to list?
 *
 * HINT: the function ARGUMENT is the variable you define within the
 * function definition.
 *
 * HINT: in order to let your function know about the $favourite_drinks
 * array, you will need to declare it as `global` right at the beginning
 * of your function.
 *
 * REQUIREMENT:
 * - use `function list_friend_drinks( $friend )`
 * - test this out for Tim and Tanja
 */