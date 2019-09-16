<?php
  $pdo = new PDO("mysql:host=localhost;dbname=www","root","");

  if(isset($_GET['id'])){

  $id = $_GET['id'];


 $statement = $pdo->prepare("SELECT id,name,email,message,image FROM users  WHERE id='$id'");
 $statement->execute(); 
 $result = $statement->fetchAll(PDO::FETCH_ASSOC);
 $id = $result[0]['id']; 
 $name = $result[0]['name'];
 $email = $result[0]['email'];
 $message = $result[0]['message'];
 $filename = $result[0]['image'];
}else {
  echo 'ID topilmadi'; 
}
