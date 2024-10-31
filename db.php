<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = 'rahasia';
$dbname = 'lk_crud';
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($mysqli->connect_errno) {
    die('Database connection failure');
}