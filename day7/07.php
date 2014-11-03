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

function list_friend_drinks( $friend ){
	global $favourite_drinks;

	echo "<ul>";
	foreach ( $favourite_drinks[$friend] as $drink ){
		echo "<li>$drink</li>";
	}
	echo "</ul>";
}

echo "<ul>";

foreach ( $favourite_drinks as $name => $drinks ){
	echo "<li>";
	echo "<h2>$name</h2>";

	list_friend_drinks( $name );

	echo "</li>";
}
echo "</ul>";

/*
 * Great, now we have an outer loop that loops through each friend, and
 * an inner loop that lists all the favourite drinks for that friend.
 *
 * Well, guess what? We're having a party, but not all of your friends can
 * make it. Below is an array containing the friends that will be coming
 * to the party. Can you figure out how to loop through this list and
 * output just the drinks for THOSE friends?
 *
 * Use the same <ul><li> structure as you did before, listing each
 * friend's name, and then a secondary <ul><li> structure to list their
 * favourite drinks.
 *
 * HINT: You should still use your `list_friend_drinks()` function for the
 * inner loop, so you don't have to do that work again!
 */

$party_friends = array( "Jane", "James", "Tanja", "Tim" );