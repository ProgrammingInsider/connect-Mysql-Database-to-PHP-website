<?php


//Server name

$servername = "localhost";


//Username

$username = "";

//Password

$password = "";

//database name

$dbname = "db";


//Make connection with database

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){

  die("Connection failed: ".$conn->connect_error);

}else{
  echo "Connected Succesfully";
}






?>

