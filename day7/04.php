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

list_friend_drinks( "Tim" );
list_friend_drinks( "Tanja" );

/*
 * Awesome! Now we have abstracted the logic for listing out our friends'
 * favourite drinks into a function.
 *
 * How can we list out the drinks for ALL of our friends?
 *
 * Let's continue to use good HTML for this. We want to output a LIST of
 * our friends, along with a LIST of their favourite drinks.
 *
 * That LIST of LISTs should look like this:
 */
?>
<hr />

<ul>
	<li>
		<h2>Jane</h2>
		<ul>
			<li>White Russian</li>
			<li>Screwdriver</li>
			<li>Sea Breeze</li>
		</ul>
	</li>
	<li>
		<h2>Tom</h2>
		<ul>
			<li>White Russian</li>
			<li>Mad Monk</li>
			<li>Cuba Libre</li>
		</ul>
	</li>
	<li>
		<h2>Etc...</h2>
	</li>
</ul>