

<html>
<head>
	<title>Registration form</title>
</head>

<body>
	<div>
		<form name="regform"method="post" action="login.php"   >
     Name:<br>
     <input type ="text" name="name" id="myname">
     
     <br>
     Country:<br>
     <input type="text" name="country" id="mycountry">
     <br>
     Email:<br>
     <input type="text" name="email">
     <br>
     Phone:<br>
      <input type="number" name="phone">
     <br>
     Password:<br>
     <input type="password" name="password">
     <br>
     <input type="submit" name="sub" value="Register" onclick="validate();">
     <br>
     <br>
        </form>
    </div>
<script type="text/javascript">

function validate()
{
    if(document.getElementById("myname").innerHTML==""){
 
 alert( "Please provide your Name!" );


 
    }

   }

  </script>
</body>


</html>