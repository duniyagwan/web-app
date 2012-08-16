<?php

$user = getenv('MYSQL_USERNAME');
$pass = getenv('DB_PASS');
$host= getenv('MYSQL_DB_HOST');
$name = getenv('MYSQL_DB_NAME');


$date_source = sprintf('mysql:host%s;dbname=%s' , $host, $name);

//PDO -> php data objects
$db = new PDO($data_source, $user, $pass);
//Make the connection to speak in UTF 8 - don't expect anything back
$db->exec('SET NAMES utf8');