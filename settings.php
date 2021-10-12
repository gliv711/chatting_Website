<?php

$success = mysqli_connect ("localhost","root","","chatting-website");

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
$x = $_SESSION['email'];
$sql=mysqli_query($success,"SELECT nom FROM users where email = '$x'");
$row = mysqli_fetch_row($sql) ;

$sql2=mysqli_query($success,"SELECT prenom FROM users where email = '$x'");
$row2 = mysqli_fetch_row($sql2) ;

$sql3=mysqli_query($success,"SELECT email FROM users where email = '$x'");
$row3 = mysqli_fetch_row($sql3) ;

$sql4=mysqli_query($success,"SELECT mdp FROM users where email = '$x'");
$row4 = mysqli_fetch_row($sql4) ;

$sql5=mysqli_query($success,"SELECT numtel FROM users where email = '$x'");
$row5 = mysqli_fetch_row($sql5) ;


?>
<html>
    <head>
    <link rel="stylesheet" href="styles.css">
        <script src="js/scripts.js"></script>
        <title> Settings</title>
    </head>

    <body>
    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           
        <ul>
				 <li>
					 <a href="dashboard.php" >
						 <span class="icon"><i class="fas fa-home"></i></span>
						 <span class="item">Dashboard</span>
					 </a>
				 </li>
				 <li>
					 <a href="chat.php">
						 <span class="icon"><i class="fas fa-desktop"></i></span>
						 <span class="item">Chat</span>
					 </a>
				 </li>
				
				 
				 
				 <li>
					 <a href="settings.php" class="active">
						 <span class="icon"><i class="fas fa-cog"></i></span>
						 <span class="item">Settings</span>
					 </a>
					 

					 <a href="./php/logout.php">Déconnection</a> 
					 <span class="icon"><i class="fas fa-cog"></i></span>
						 
				 </li>
				 
				 
			 </ul>
            
            
        </div>

        </div>

    </div>
        <center>
        
            <form action="php/update.php" method="post/get" name="edit_info">
                <h1> Modifier Information</h1> <br>
                <label> Nom : </label><input type="text" name="nom" value="<?php echo $row[0]; ?>" > <br>
                <label> Prenom : </label><input type="text" name="prenom" value="<?php echo $row2[0] ?>"> <br>
                <label> Email : </label><input type="email" name="email" value ="<?php  echo $row3[0] ?>"> <br>
                <label>Old Password : </label> <input type="password" name="old_pwd" > <br>
                <label>New Password : </label> <input type="password" name="new_pwd" > <br>
                <label>numero de telephone : (facultatif) </label><input type="tel" name="tel" value="<?php echo $row5[0] ?>" > 
                <br>
                <br>
            
                <input type="submit" value="Valider" class="connect-button">


            </form> 
<br>
            
    </center>
    </body>
</html>