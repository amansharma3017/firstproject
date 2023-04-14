<?php
$servername="localhost";
$username="root";
$password="";
$database_name="mydp";

$conn=mysqli_connect($servername, $username,$password,$database_name);
if(!$conn){
    die("Connection Fialed:" . mysqli_connect_error());
}