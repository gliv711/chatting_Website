<?php

$success = mysqli_connect ("localhost","root","","chatting-website");

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
$x = $_SESSION['email'];
$sql=mysqli_query($success,"SELECT nom FROM users where email = '$x'");
$row = mysqli_fetch_row($sql) ;

$sql2=mysqli_query($success,"SELECT prenom FROM users where email ='$x'");
$row2 = mysqli_fetch_row($sql2) ;

$sql3=mysqli_query($success,"SELECT numtel FROM users where email ='$x'");
$row3 = mysqli_fetch_row($sql3) ;

// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html> 
	<head> 
	<link rel="stylesheet" href="styles.css">
	<script src="/js/scripts.js"></script>
		<title>Dashboard</title> 
	</head> 
	<body> 
	<br />
	

	 <html> 
	 <head> 
	 <link rel="stylesheet" href="styles.css">
	 <script src="/js/scripts.js "></script>
		 <title>Page de notre section membre</title> 
	 </head> 
	 <body> 
	 
	  <div class="wrapper">
		 <!--Top menu -->
		 <div class="sidebar">
			<!--profile image & text-->
			<div class="profile">';
			 echo '<h3>'.$row2[0].' '.$row[0]. '</h3>';
			 echo '<p> '.$row3[0].'</p>' ;
				 
			 echo '
			 </div>
			 <!--menu item-->
			 <ul>
				 <li>
					 <a href="dashboard.php" class="active">
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
					 <a href="settings.php">
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
<br>
	 <center> <p> Appuiyer sur le bouton CHAT pour Commencer </p> </center>
	 
	 </body> 
 
	 </html>' ;	
}
else {
	echo '<html> <head> <title> erreur </title> 
	<body>
	<center> <h1>Vous devez vous connecter pour pouvoir afficher cette page ! .</h1></center> </body> </html>';
}
?>