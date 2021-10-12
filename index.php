<?php
if (isset($_SESSION["email"])){
    header ("location : dashboard.php");
}
?>

<html>
    <head>
        
        <title>
            Login Page
        </title>
    </head>
    <body>
        
        <center>
            <h1>Se connecter </h1> <br>

                <form action="php/connection.php"  method="post" name="inscription">
                    <label> Email : </label> <input type="email"  name="email" required="required" > <br>
                    <label>Password : </label> <input type="password" name="pwd" required="required" > <br>
                    <input type="submit" value="Connect" class="connect-button" >

            </form> 
            <a href="registration.php">Creer un compte </a>
        </center>
    </body>
</html>