<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sponsorship";

//connection
$con= new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($con->connect_error){
    die("Connection failed");
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$Idea=$_POST['Idea'];

$insert="insert into insrt (name,email,phone,Idea) values('$name','$email','$phone','$Idea')";
 $result= $con->query($insert);



?>