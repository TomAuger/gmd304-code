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


// Some of these names are deliberately mis-spelled, lower case, or just
// plain don't exist in our `$favourite_drinks` array. This was done on purpose
// to illustrate what could happen.
$party_friends = array( "jane", "James", "Tanya", "Tim", "Jimmy" );

function list_friend_drinks( $friend ){
	global $favourite_drinks;

	echo "<ul>";
	foreach ( $favourite_drinks[$friend] as $drink ){
		echo "<li>$drink</li>";
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

/*
 * Ugh. Notices and Warnings. Now, these will not cause your program to stop
 * (like an Error would), but they WILL mess up your program, which could have
 * serious implications down the road.
 *
 * Lesson learned: associative array keys are case sensitive and must match
 * EXACTLY, otherwise you'll get Notices and/or Warnings, and your code
 * will not function properly.
 *
 * These errors CAN be prevented. `isset()` is a way to check whether a key
 * or array index has actually been defined. It will return `true` if it has
 * and `false` if it has not. This is a great way to avoid notices, and to
 * get your program to do something else if invalid data was supplied.
 *
 * Check the next file to see how you might handle this, and make a more
 * robust function at the same time.
 */