<?php
$conn = new mysqli('localhost', 'root', '', 'crudopretion');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
