<?php
include("db.php");

if(isset($_GET['id'])){

    $id=$_GET["id"];
}else{
    $id=$_SESSION["user"];
}

// $id=$_GET["id"];
// if($id==""){
// $id=$_SESSION["user"];
// }
$sql="select * from registration where id='$id'";
$rs=mysql_query($sql);
$result=mysql_fetch_array($rs);

?>



<html>
<head>
	<title>Registration form</title>
</head>

<body>
	<div>
	<h1>Update profile</h1>
		<form method="post" action="checkupdateprofile.php?id=<?php echo $id;?>">
     Name:<br>
     <input type ="text" name="name" value="<?php echo $result["name"];?>">
     <br>
     Country:<br>
     <input type="text" name="country"  value="<?php echo $result["country"];?>">
     <br>
     Email:<br>
     <input type="text" name="email"  value="<?php echo $result["email"];?>">
     <br>
     Phone:<br>
      <input type="number" name="phone"  value="<?php echo $result["phone"];?>">
     <br>
   
     <input type="submit" name="sub" value="update">
     <br>
     <br>
        </form>
    </div>

</body>


</html>