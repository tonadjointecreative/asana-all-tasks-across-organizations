<?php
// ************************************ //
// Enter your Personal Acces Token 		//
// below and rename file to config.php 	//
// ************************************ //
$api_key = "1/1201273163549854:d69996e1ff43d1b10643d9ffd6065f53";


// Safety feature so people cannot access this page and steal your API key
if(!defined('SAFEASANA')){
	echo 'Tu fais là mon champion?';
	exit(1);
}


// For some strange reason the Asana API Workspace ID is not the same
// as the URL to a workspace, so to make URLs to workspaces work, 
// you must configure them here.

function idToURL($input){
	// Repeat if you have multiple workspaces...
	// Ehmm, probably you do. Why else are you using this code?
	// Example of 2 workspaces
	// workspace list:
	// 1201273069472134	tonadjointecreative.ca
	// 1194435664836328	mavlo.ca
	// 163731604691667	N&G Média Inc.
	// 1165453211090143	mooseagencemarketing.ca
	// 1202614144512700	Gen Gauvin Inc.
	if($input == "1201273069472134") // workspace ID from API TON ADJOINTE CRÉATIVE

		// Workspace URL number.
		// You can view this if you go to 'my tasks' in a
		// workspace and copy the numbered part of the url.
		$output = "1201273069472146"; 

	if($input == "163731604691667") // workspace ID N&G MÉDIA
		$output = "1201462105879457"; // workspace URL number

	if($input == "1165453211090143") // workspace ID MOOSE AGENCE MARKETING
		$output = "1202058459860124"; // workspace URL number

	return $output;
}

?>