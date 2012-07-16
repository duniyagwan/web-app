<?php

$errors = array();


$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	// 0 is conisdered empty
	// Empty: 0, flase, null, '', array(), '0'
	
	//if(!array_key_exists($subject, $possible_subjects)) {
		
	//}
	
	
}
?>