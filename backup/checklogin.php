<?php
session_start();
include"db.php";
$name=$_POST["name"];
$pass=$_POST["password"];
$sql="SELECT count(*)  as count
FROM  `registration` 
WHERE name = '$name' and pass='$pass'";
$rs=mysql_query($sql);
$result=mysql_fetch_array($rs);
$count= $result["count"];

if($count==1){


$sql1="SELECT * 
FROM  `registration` 
WHERE name = '$name' and pass='$pass'";

$rs1=mysql_query($sql1);

?>
<html>
<head>
	
</head>

<body>
	<table border="1" align="center">
		<th>Name</th>
		<th>Phone</th>
		<th>Country</th>
		<th>email</th>
		
		<?php 
		while($result1=mysql_fetch_array($rs1)){
			 echo "<tr>".
            "<td>". $result1["name"]. "</td>".
            "<td>".$result1["phone"]. "</td>".
            "<td>". $result1["country"]. "</td>".
            "<td>".$result1["email"]. "</td>".
            "</tr>";
		}
		?>
		
	</table>
</body>
</html>
<?php
}
else{
	echo "wrong username or pass";

}



?>