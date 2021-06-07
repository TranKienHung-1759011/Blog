<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = '1759011blog';
// $host = 'sql204.epizy.com';
// $user = 'epiz_28814584';
// $pass = 's6PVEBG6Xp5DG';
// $db_name = 'epiz_28814584_1759011blog';
$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}