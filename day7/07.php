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
