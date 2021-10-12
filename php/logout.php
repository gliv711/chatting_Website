<?php

session_start();
session_destroy();
setcookie('PHPSESSID',session_id(),time()-1);
echo '
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title> Deconnexion</title>
</head>

<body>

	  <div class="wrapper">
		 <!--Top menu -->
		 <div class="sidebar">
			<!--profile image & text-->
			<div class="profile">';
			 
				 
			 echo '
			 </div>
			 <!--menu item-->
			 <ul>
				 <li>
					 <a href="/chatting_website/index.php" >
						 <span class="icon"><i class="fas fa-home"></i></span>
						 <span class="item">Home</span>
					 </a>
				 </li>
				 <li>
					 <a href="#">
						 <span class="icon"><i class="fas fa-desktop"></i></span>
						 <span class="item">Chat</span>
					 </a>
				 </li>
				
				 
				 
				 <li>
					 <a href="#" >
						 <span class="icon"><i class="fas fa-cog"></i></span>
						 <span class="item">Settings</span>
					 </a>
					 

					 <a href="./php/logout.php" class="active">Déconnection</a> 
					 <span class="icon"><i class="fas fa-cog"></i></span>
						 
				 </li>
				 
				 
			 </ul>
			 
			 
		 </div>
 
		 </div>
 
	 </div>
     
     <center> <h3>Vous êtes Deconnecter</h3> </center>
	 
</body>

</html>

';
?>