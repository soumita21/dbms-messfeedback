<?php



$servername ="localhost";

$dbusername="root";

$dbpassword="";

$dbname="project";



$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);



if(!$conn){

	die("Connection Failed");

}