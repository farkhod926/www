<?php
require "users.php";

$filename = uploadImage($_FILES['image']); 

addUser($_POST['name'],$_POST['email'],$_POST['message'],$filename);


header ("Location:/index.php");



