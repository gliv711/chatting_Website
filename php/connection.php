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
      echo "<h1>login done</h1>";
    }else {
      echo "<h2>fail login</h2> ";
    }

    


?>
</center>
</body>
</html>