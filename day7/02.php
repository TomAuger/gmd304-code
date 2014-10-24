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

/*
 * Great! Now we have a good data structure that will allow us to
 * query a friend's name and return a list of their favourite drinks.
 * Let's test it out.
 *
 * What are Daphne's favourite drinks?
 *
 * "echo" out a list of Daphne's favourite drinks, one drink per line.
 *
 * Since Daphne's drinks are a LIST, we should use the appropriate
 * HTML structure. See an example below:
 */
?>

<ul>
	<li>White Russian</li>
	<li>Screwdriver</li>
	<li>Sea Breeze</li>
</ul>

<?php
/*
 * Challenge: how are you going to get the <ul></ul> to display only ONCE
 * and yet the <li> and <h2> to display for each element in the
 * `$favourite_drinks` array?
 *
 * Solution: consider carefully what you `echo` BEFORE the loop,
 * INSIDE the loop, and AFTER the loop.
 */