<?php

$servername="localhost";
$user="root";
$password="10835954enoch";
$dbname="client_complaint_form";



$conn=mysqli_connect($servername,$user,$password,$dbname);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
echo "<p>Connected Successfully</p>";

?>