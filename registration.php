<?php
if (isset($_SESSION["email"])){
    header ("location : dashboard.php");
}
?>
<html>
    <head>
    <link rel="stylesheet" href="styles.css">
        <script src="js/scripts.js"></script>
        <title> registration</title>
    </head>

    <body>
    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           
            <ul>
                <li>
                    <a href="index.php" >
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Se connecter</span>
                    </a>
                </li>
                <li>
                    <a href="registration.php" class="active">Creer un compte </a>
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        
                    </a>
                </li>
                <li>
                    
                
                
            </ul>
            
            
        </div>

        </div>

    </div>
        <center>
        
            <form action="php/registration.php" method="post/get" name="registration_form">
                <h1> inscription</h1> <br>
                <label> Nom : </label><input type="text" name="nom" required="required"> <br>
                <label> Prenom : </label><input type="text" name="prenom" required="required"> <br>
                <label> Email : </label><input type="email" name="email" required="required"> <br>
                <label>Password : </label> <input type="password" name="pwd" required="required"> <br>
                <label> numero de telephone : (facultatif) </label><input type="tel" name="tel" required="required"> <br>
            
                <input type="submit" value="Valider" class="connect-button">


            </form> 
<br>
            <p>Vous avez deja un compte ? </p><a href="index.php"> Se connecter  </a>
    </center>
    </body>
</html>