<?php 
$pdo = new PDO("mysql:host=localhost;dbname=www","root","");
$statement = $pdo->prepare("SELECT * FROM users");
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

include "../view/admin.show.php";