<?php
include('db.php');
$id=$_GET['id'];
echo "DELETED";




 $sql="DELETE FROM registration where id='$id'";

 $deleted=mysql_query($sql);
 if($deleted){
 header("Location: http://localhost/student/adminprofile.php");
 }

?>