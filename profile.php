<?php
include("db.php");
$id=$_SESSION["user"];

$sql="select * from registration where id='$id'";
$rs=mysql_query($sql);


	

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
		while($result=mysql_fetch_array($rs)){
			 echo "<tr>".
            "<td>". $result["name"]. "</td>".
            "<td>".$result["phone"]. "</td>".
            "<td>". $result["country"]. "</td>".
            "<td>".$result["email"]. "</td>".
            "</tr>";
		}
		?>
		
	</table>
	<a href="update.php">Update</a>
</body>
</html>