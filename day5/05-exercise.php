<?php
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

function is_administrator( $user ){
	return $user['access_level'] == "admin";
}

foreach ( $users as $user ){
	echo "<p>{$user['full_name']} is ";
	if ( ! is_administrator( $user ) ){
		echo "not ";
	}
	echo "an administrator</p>";
}