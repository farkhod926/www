<?php
if(!empty($_POST['id'])){
  
  $id = $_POST['id'];

  $pdo = new PDO("mysql:host=localhost;dbname=www","root","");
  $statement = $pdo->prepare("SELECT id FROM users WHERE id='$id'");
  $statement->execute();
  $id = $statement->fetchAll(PDO::FETCH_ASSOC);
  var_dump($id);
}
else
{
  echo 'Xatolik bor';
}

 include "../view/edit.show.php";