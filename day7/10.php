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

$party_friends = array( "jane", "James", "Tanya", "Tim", "Jimmy" );

function list_friend_drinks( $friend ){
	global $favourite_drinks;

	echo "<ul>";

	// Check to see whether this "friend" is actually in our `$favourite_drinks` list
	if ( isset( $favourite_drinks[$friend] ) ){
		foreach ( $favourite_drinks[$friend] as $drink ){
			echo "<li>$drink</li>";
		}

	// If not, we can ignore the name, or we can output a custom message,
	// like we do here.
	} else {
		echo "<li>Error: $friend is not in our database!</li>";
	}

	echo "</ul>";
}

echo "<ul>";

foreach ( $party_friends as $name ){
	echo "<li>";
	echo "<h2>$name</h2>";

	list_friend_drinks( $name );

	echo "</li>";
}
echo "</ul>";

