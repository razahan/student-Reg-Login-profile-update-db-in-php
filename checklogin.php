<?php
include"db.php";
$name=$_POST["name"];
$pass=$_POST["password"];
$type=$_POST["type"];

$sql="SELECT count(*)  as count
FROM  `registration` 
WHERE name = '$name' and pass='$pass' and user_type='$type'";
// $result=mysql_fetch_array($rs);
// echo $result["num_user"];
$rs=mysql_query($sql);
$result=mysql_fetch_array($rs);
$count= $result["count"];

if($count==1){


$sql1="SELECT * 
FROM  `registration` 
WHERE name = '$name' and pass='$pass'";

$rs1=mysql_query($sql1);
while($result1=mysql_fetch_array($rs1)){
	

$id=$result1['id'];
$name=$result1["name"];

$_SESSION["user"]=$id;
$_SESSION["user_name"]=$name;

if($type==0){
header("Location: http://localhost/student/profile.php");
}else{
header("Location: http://localhost/student/adminprofile.php");	
}
die();
}




}else{
	echo "wrong username or pass";

}



?>