<?php
if (isset($_SESSION["email"])){
    header ("location : dashboard.php");
}
?>

<html>
    <head>
    <link rel="stylesheet" href="styles.css">
        <title>
            Login Page
        </title>
    </head>
    <body>
    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           
            <ul>
                <li>
                    <a href="index.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Se connecter</span>
                    </a>
                </li>
                <li>
                    <a href="registration.php">Creer un compte </a>
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        
                    </a>
                </li>
                <li>
                    
                
                
            </ul>
            
            
        </div>

        </div>

    </div>
        
        <center>
            <h1>Se connecter </h1> <br>

                <form action="php/connection.php"  method="post" name="inscription">
                    <label> Email : </label> <input type="email"  name="email" required="required" > <br>
                    <label>Password : </label> <input type="password" name="pwd" required="required" > <br>
                    <input type="submit" value="Connect" class="connect-button" >

            </form> 
            
        </center>
    </body>    
</html>