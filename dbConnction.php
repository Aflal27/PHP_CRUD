<?php
$server = "localhost";
$userName = "root";
$serverPassword = "";
$dbName = "dbcrud";

$conn = new mysqli($server,$userName,$serverPassword,$dbName);

// check db connection
if ($conn->connect_error) {
    die("connection faild!".$conn->connect_error);
}
?>