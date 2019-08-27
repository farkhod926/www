<?php

function logout(){
	setcookie('auth','',time()-60*60*24*30);
}

logout();
header('Location:/index.php');
exit();