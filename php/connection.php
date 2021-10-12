<html>
<head> <title> test </title> </head>
<body>
    <center>
<?php



    $success = mysqli_connect ("localhost","root","","chatting-website");
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pwd'];
    $sql = mysqli_query($success,"SELECT * FROM users WHERE email = '".$_REQUEST['email']."' and mdp = '".($_REQUEST['pwd'])."'");
 
    $row = mysqli_num_rows($sql);
    if($row > 0 )
    {
    session_start();
      $_SESSION['email'] = $_REQUEST['email'];
      $_SESSION['pwd'] = $_REQUEST['pwd'];
      $_SESSION['sid']=session_id();
      $sql2= mysqli_query($success,"Select prenom,nom from users where email = '$email' ;");
      while ($row = mysqli_fetch_row($sql2)) {
        echo "<h1> Bienvenue ".$row[0]." " .$row[1]. "</h1>";
    }
      echo "<meta http-equiv='refresh' content='2; URL=/chatting_website/php/dashboard.php' />";
      echo "<a href='logout.php'> Se deconnecter </a>" ;
    }else { 
      echo "<h2>fail login</h2> ";
      echo "<meta http-equiv='refresh' content='2; URL=/chatting_website/index.php' />";
    }

    


?>
</center>
</body>
</html>