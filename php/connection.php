<html>
<head> <title> test </title> </head>
<body>
    <center>
<?php

//create connection

$conn= mysqli_connect ("localhost","root","","chatting-website");

if($conn==false){
    die("error, could not connect");
}
else echo 'Connected' ;

// form
$email=$_REQUEST['email'];
$pdw=$_REQUEST['pdw'];

$sql="insert into users(email,mdp) values ('$email','$pdw')  "; 

// if succesfull
if (mysqli_query($conn,$sql)){
    echo "<h3> connection réussie </h3>";
}
else echo"<h3> Erreur dans la connection  </h3>";

mysqli_close($conn);
?>
</center>
</body>
</html>