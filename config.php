<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "formvalidation";

$conn = new mysqli($host,$user,$password,$db);

if($conn->connect_error){
    die("Connection Error" .$conn->connect_error );
}
?>