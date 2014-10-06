<?php
/*
# Associative Arrays
*/

// Associative arrays are like mini databases
$favourite_colours = array(
	"Tom" => "green",
	"Ben" => "blue",
	"Joe" => "yellow",
	"May" => "pink",
	"Amy" => "orange"
);

print_r( $favourite_colours );
echo "<hr>";

echo $favourite_colours["Tom"], "<br>";

echo "Tom's favourite colour is {$favourite_colours['Tom']}", "<br>";

echo "<hr>";

// Let's loop through these items
foreach( $favourite_colours as $key => $value ){
	echo "{$key}'s favourite colour is $value", "<br>";
}

// Can I just access the names (keys)?
print_r( array_keys( $favourite_colours ) );
echo "<br>";

// We can use this in a loop, too!
// This pattern is not very useful
foreach( array_keys( $favourite_colours ) as $key ){
	echo "$key: {$favourite_colours[$key]}", "<br>";
}

// A better pattern takes advantage of the array
$names = array_keys( $favourite_colours );
for ( $i = 0; $i < count( $names ); $i = $i + 2 ){
	echo "$i: {$names[$i]}: {$favourite_colours[$names[$i]]}", "<br>";
}

// Can we access just the colours?
print_r( array_values( $favourite_colours ) );
echo "<br>";

// Values can be other arrays
$users = array(
	"tauger" => array( "Tom Auger", "green", "admin", "teach.me.tom@outlook.com" ),
	"smelly_92" => array( "Dan Brown", "brown", "editor", "dbrown@gmail.com" ),
	"ninjat" => array( "Michael Boren", "yellow", "contributor", "pizzadude@yahoo.ca" )
);

// Or even other associative arrays
$users = array(
	"tauger" => array( 
		"full_name" => "Tom Auger", 
		"fav_colour" => "green", 
		"access_level" => "admin", 
		"email" => "teach.me.tom@outlook.com"
	),
	"smelly_92" => array( 
		"full_name" => "Dan Brown", 
		"fav_colour" => "brown", 
		"access_level" => "editor", 
		"email" => "dbrown@gmail.com"
	),
	"ninjat" => array( 
		"full_name" => "Michael Boren", 
		"fav_colour" => "yellow", 
		"access_level" => "contributor", 
		"email" => "pizzadude@yahoo.ca"
	)
);

echo $users['tauger']['access_level'];
