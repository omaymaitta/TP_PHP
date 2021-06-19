<?php

$id = $_GET['id2'];
  $login = $_GET['n1'];
  $password = $_GET['n2'];
  
  $a= mysqli_connect('localhost','root','','mabase');

  $sql = "UPDATE user SET login='$login', password='$password' WHERE
id=$id";

 mysqli_query($a,$sql);

  header('location:index.php');
      
?>
