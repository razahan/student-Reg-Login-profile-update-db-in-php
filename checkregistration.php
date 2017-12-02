<?php
include("db.php");
//echo "this is test";
$name=$_POST["name"];
$county=$_POST["country"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$pass=$_POST["password"];
$sql="insert into registration(id, name, country, email, phone,pass) values(NULL, '$name', '$county', '$email', '$phone','$pass')";
$test=mysql_query($sql);
if($test){
	echo" inserted";
}else{
	echo "not inserted";
}

?>