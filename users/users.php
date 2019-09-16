<?php
function uploadImage($image)
{

	$extension = pathinfo($image['name'],PATHINFO_EXTENSION);
	
	$filename = uniqid() . "." . $extension;

	move_uploaded_file($image['tmp_name'], "uploads/". $filename);
	
	return $filename;
}

function addUser($name,$email,$message,$filename)
{
	$pdo = new PDO("mysql:host=localhost;dbname=www","root","");
    $sql = "INSERT INTO users (name,email,message,image) VALUES (:name,:email,:message,:image)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":name", $name);
$statement->bindParam(":email", $email);
$statement->bindParam(":message", $message);
$statement->bindParam(":image", $filename);
$statement->execute();
}
function updateUser($name,$email,$message,$filename,$id)
{
	$pdo = new PDO("mysql:host=localhost;dbname=www","root","");
    $sql = "UPDATE users SET name='$name',email='$email',message='$message',image='$filename' WHERE id='$id'";
$statement = $pdo->prepare($sql);
$statement->bindParam("name", $name);
$statement->bindParam("email", $email);
$statement->bindParam("message", $message);
$statement->bindParam("image", $filename);
$statement->execute();
}