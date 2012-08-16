<?php

$user = getenv('MYSQL_USERNAME');
$pass = getenv('DB_PASS');
$host= getenv('MYSQL_DB_HOST');
$name = getenv('MYSQL_DB_NAME');


$date_source = sprintf('mysql:host%s;dbname=%s' , $host, $name);