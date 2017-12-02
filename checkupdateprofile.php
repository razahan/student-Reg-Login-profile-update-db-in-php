<?php
include("db.php");
//echo "this is test";


if(isset($_GET['id'])){

    $id=$_GET["id"];
}else{
    $id=$_SESSION["user"];
}
// $id=$_SESSION["user"];
$name=$_POST["name"];
$country=$_POST["country"];
$email=$_POST["email"];
$phone=$_POST["phone"];


$sql = "UPDATE registration SET name='$name',country='$country',email='$email',phone='$phone' WHERE id='$id'";
mysql_query($sql);


?>