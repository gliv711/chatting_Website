<?php
echo 'Deconnexion terminer' ;
session_start();
session_destroy();
setcookie('PHPSESSID',session_id(),time()-1);
echo "<a href='/chatting_Website/index.php'> Se connecter </a>";
?>