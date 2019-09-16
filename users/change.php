<?php
require "users.php";

$filename = uploadImage($_FILES['image']); 

updateUser($_POST['name'],$_POST['email'],$_POST['message'],$filename,$id = $_POST['id']);

header('location:admin.php');

