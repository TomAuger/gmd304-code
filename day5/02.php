<?php
/*
# Array basics
*/

$grades = array( 85, 76, 88, 95, 65, 50 );
$names = array( "Tom", "Joe", "Dan", "Bob", "Jim", "Tim", "Some other guy with a really long name!" );

// Try to output $names
echo $names, "<br>"; // Generates a Notice (if Notices are on) and just prints "Array"


// Can we see the whole array at once?
// This works for DEBUGGING purposes
print_r( $names ); // but is never used in production code
echo "<br>";
var_dump( $names ); // This works, too, with even more (possibly confusing) info.
echo "<br>";


// Subscript $names
echo "0: " . $names[0], "<br>";
echo "1: " . $names[1], "<br>";
echo "5: " . $names[5], "<br>";

echo "Length of 'names': " . count( $names ), "<br>";
echo "7: " . $names[7], "<br>"; // This is the 8th element (which doesn't exist). Generates a Notice.

// Access the last element of $names
$last_item_index = count( $names ) - 1;
echo "$last_item_index: " . $names[$last_item_index], "<br>";

// Do it in a more compact way:
echo "Last item: " . $names[count( $names ) - 1], "<br>";

// Or, try end()
echo "End: " . end( $names ), "<br>";

// Arrays can store anything a variable can store
$mixed_array = array(
	"Some text",
	1,
	1.3475,
	false,
	true
);

print_r( $mixed_array );
echo "<br>";

// What's up with "false" and "true"?
echo true, "<br>"; // Echoes 1
echo false, "<br>"; // Echoes nothing (empty line)

// We'll talk more about booleans when we get to logic.

// An array can even contain another array!
// This is called a "multi-dimensional" array
$two_dee = array(
	array( "Tom", "boy" ),
	array( "Amy", "girl" ),
	array( "Pat", "???" )
);

print_r( $two_dee );
echo "<br>";

echo $two_dee[0], "<br>"; // Oops, once again a Notice and just "Array" is output.
print_r( $two_dee[0] ); // Right, it's an array!
echo "<br>";
echo "[0,0] " . $two_dee[0][0], "<br>";
echo "[0,1] " . $two_dee[0][1], "<br>";
echo "[2,0] " . $two_dee[2][0], "<br>";
echo "[2,1] " . $two_dee[2][1], "<br>";