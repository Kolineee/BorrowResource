<?php
$conn = new mysqli('localhost', 'root', '', 'resource_management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
