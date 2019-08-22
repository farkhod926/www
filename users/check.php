<?php
session_start();
if (!empty($_POST['email']) && !empty($_POST['password'])){
	$email = $_POST['email'];
	$password =$_POST['password'];

	$pdo = new PDO("mysql:host=localhost;dbname=www","root","");
	$statement = $pdo->prepare("SELECT email,password FROM admins WHERE email='$email' and password = '$password'");
	$statement->execute();
	$admins = $statement->fetchAll(PDO::FETCH_ASSOC);
	if(!empty($admins)){
		echo 'ok';
	}
	else{
	echo 'Login yoki Parol xato';
	}
}
else {
	echo 'Xatolik';
}
	
