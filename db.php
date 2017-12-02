<?php
session_start();
define("HOST","localhost");
define("USER","root");
define("PASS","");

$con = mysql_connect(HOST,USER,PASS);
	if(!$con)
		die("could not connect to database");
	$check=mysql_select_db("university",$con);
	 if($check){
	 	echo("conneted");
	 }
	 	else{
 		echo("notconneted");
	}
		
?>