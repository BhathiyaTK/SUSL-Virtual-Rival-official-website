<?php

$host="localhost";
$db_name="root";
$db_pass= "";
$db="virtual_rival";

$conn = new mysqli($host,$db_name,$db_pass,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>