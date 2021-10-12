
<?php
session_start();
//create connection

$conn= mysqli_connect ("localhost","root","","chatting-website");


// form
$nom=$_REQUEST['nom'];
$prenom=$_REQUEST['prenom'];
$email=$_REQUEST['email'];
$old_pwd=$_REQUEST['old_pwd'];
$new_pwd=$_REQUEST['new_pwd'];
$tel=$_REQUEST['tel'];


$sql_basic = mysqli_query($conn,"SELECT mdp from users where email ='".$_SESSION['email']."' ");
$row = mysqli_fetch_row($sql_basic);


$sql="UPDATE users set nom ='".$nom."' WHERE email =  '".$_SESSION['email']."' " ;

$sql2="UPDATE users set prenom ='".$prenom."' WHERE email =  '".$_SESSION['email']."' " ;

$sql3="UPDATE users set email ='".$email."' WHERE email =  '".$_SESSION['email']."' " ;

$sql4="UPDATE users set numtel ='".$tel."' WHERE email =  '".$_SESSION['email']."' " ;

$sql5="UPDATE users set mdp ='".$new_pwd."' WHERE email =  '".$_SESSION['email']."' " ;



// if succesfull
$x=$row[0];
if ($x==$old_pwd){
    if (mysqli_query($conn,$sql) && mysqli_query($conn,$sql2) && mysqli_query($conn,$sql3) && mysqli_query($conn,$sql4) && mysqli_query($conn,$sql5))
    { echo "<meta http-equiv='refresh' content='2; URL=/chatting_website/settings.php' />"; }
}else echo "<h3>Password not matching<h3>";
        
?>
