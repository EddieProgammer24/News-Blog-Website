<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $pass, $db_name);

if($conn->connect_error)
{
    die('Database Connection error:' . $conn->connect_error);
}
else
{
    echo "Database connection successful";
}