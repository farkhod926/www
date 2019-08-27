<?php

function isUser(){

	return isset($_COOKIE['auth']);
}
function getUser(){

	return $_COOKIE['auth'];
}
if(!isUser()){

	header('Location:login.php');
	exit;	

}
else{

	$pdo = new PDO("mysql:host=localhost;dbname=www","root","");
	$statement = $pdo->prepare("SELECT * FROM users");
	$statement->execute();
	$users = $statement->fetchAll(PDO::FETCH_ASSOC);
	include "../view/admin.show.php";
}