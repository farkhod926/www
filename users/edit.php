<?php
if(isset($_GET['edit'])){

  $id = $_GET['edit'];

  $pdo = new PDO("mysql:host=localhost;dbname=www","root","");
  $name = '';
  $statement = $pdo->prepare("SELECT name,email,message,image FROM users  WHERE id='$id'");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  $name = $result['name'];
  header('location:../view/edit.show.php');
}
else 
{
  echo 'ID topilmadi';
}