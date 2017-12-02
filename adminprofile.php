<?php
include("db.php");
$id=$_SESSION["user"];

$sql="select * from registration ";
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
            "<td>".$result["email"]. "</tds>".
             "<td><a href='http://localhost/student/update.php?id=".$result['id']."'>Update</a></td>".
            "<td><a href='http://localhost/student/delete.php?id=".$result['id']."'>Delete</a></td>".
            "</tr>";
		}
		?>
		
	</table>
	<a href="update.php">Update</a>
</body>
</html>