<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['pwd'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html> 
	<head> 
	<link rel="stylesheet" href="styles.css">
	<script src="/js/scripts.js"></script>
		<title>Page de notre section membre</title> 
	</head> 
	<body> 
	<p> 
	Votre login est '.$_SESSION['email'].' et votre mot de passe est '.$_SESSION['pwd']. '. 
	</p> 
	<br />
	 <a href="./php/logout.php">Déconnection</a> 

	<div id="mySidenav" class="sidenav">
	 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	 <a href="#">About</a>
	 <a href="#">Services</a>
	 <a href="#">Clients</a>
	 <a href="#">Contact</a>
   </div>
   
   <!-- Use any element to open the sidenav -->
   <span onclick="openNav()">open</span>
   
   <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
   <div id="main">
	 Home
   </div>
	</body> 

	</html>' ;	
}
else {
	echo '<html> <head> <title> erreur </title> 
	<body>
	<center> <h1>Vous devez vous connecter pour pouvoir afficher cette page ! .</h1></center> </body> </html>';
}
?>