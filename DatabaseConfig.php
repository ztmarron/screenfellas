<?php

$db = new mysqli("localhost", "screenfellas", "screenfellas", "screenfellas");
if($db->connect_errno) {
	echo "Failed to connect to MySQL (code " . $db->connect_errno . ") " . $db->connect_error;
}

// $db->query("CREATE TABLE IF NOT EXISTS articles ");

?>