<?php
/*
# Array iteration
*/

$names = array( "Tom", "Joe", "Dan", "Bob", "Jim", "Tim", "Some other guy with a really long name!" );

// Let's iterate through this array.
foreach( $names as $name ){
	echo $name, "<br>";
}

echo "<hr>";

// We can do better. Let's wrap some HTML.
echo "<ul>";
foreach( $names as $name ){
	echo "<li>Name: $name</li>";
}
echo "</ul>";

// Edit "in place" - pass by reference
foreach( $names as &$name ){ // <-- note the "&" in front of $name
	$name = strtolower( $name );
}
print_r( $names );
echo "<hr>";

// There's another way to loop.
for ( $i = 0; $i < 10; $i = $i + 1 ){
	echo "$i", "<br>";
}

// $i++ is the same as $i = $i + 1
for ( $i = 0; $i < 10; $i++ ){
	echo "$i", "<br>";
}

// Note that we never get to 10.

// Now, let's try it on our array.
for ( $i = 0; $i < count( $names ); $i++ ){
	echo "[$i] " . $names[$i], "<br>"; 
}

// Don't like having $names[i] outside the quotes?
for ( $i = 0; $i < count( $names ); $i++ ){
	echo "[$i] {$names[$i]}", "<br>"; 
}

// We can do more with this approach, but usually we want `foreach()`
for ( $i = 0; $i < count( $names ); $i = $i + 2 ){
	echo "[$i] {$names[$i]}", "<br>"; 
}

// Backward?
for ( $i = count( $names ) - 1; $i > -1; $i -= 1 ){
	echo "[$i] {$names[$i]}", "<br>"; 
}