<?php
//Developer: Santiago
//Database engine conection
$host="localhost"; //127.0.0.1
$port="3306";
$username="root";
$password="";
$dbname="market";
//My SQL connection
$conn=new Mysqli($host,$username,$password,$dbname,$port);
//Check connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
    exit();
} else{
    echo"Connection succesfully";
}
?>  