<?php
  $pdo = new PDO("mysql:host=localhost;dbname=www","root","");

  if(isset($_GET['delete'])){

  $id = $_GET['delete'];


 $statement = $pdo->prepare("DELETE  FROM users  WHERE id='$id'");
 $statement->execute();

 header('location:admin.php');
}else {
  echo 'ID topilmadi'; 
}