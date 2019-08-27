<?php
if(!empty($_POST['id'])){

  $id = $_POST['id'];

  $pdo = new PDO("mysql:host=localhost;dbname=www","root","");
  $statement = $pdo->prepare("SELECT name,email,message,image FROM users  WHERE id='$id'");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result);
  include "../view/edit.show.php";
}
else 
{
  echo 'ID topilmadi';
}