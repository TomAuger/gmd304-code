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
foreach( array_keys( $favourite_colours ) as $key ){
	echo "$key: {$favourite_colours[$key]}", "<br>";
}

// Can we access just the colours?
print_r( array_values( $favourite_colours ) );
echo "<br>";