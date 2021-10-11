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
$nom=$_REQUEST['nom'];
$prenom=$_REQUEST['prenom'];
$email=$_REQUEST['email'];
$pwd=$_REQUEST['pwd'];
$tel=$_REQUEST['tel'];

$sql="insert into users(nom,prenom,email,mdp,numtel) values ('$nom','$prenom','$email','$pwd','$tel') " ;

// if succesfull
if (mysqli_query($conn,$sql)){
    echo "<h3> Inscription réussie </h3>";
}
else echo"<h3> Erreur dans l'inscription </h3>";

mysqli_close($conn);
?>
</center>
</body>
</html>