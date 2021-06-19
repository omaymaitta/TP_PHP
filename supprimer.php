<?php 
$id = $_GET['id'];
 
  $a= mysqli_connect('localhost','root','','mabase');

  $sql = "DELETE FROM user WHERE id=$id";

 mysqli_query($a,$sql);

  header('location:index.php');
  ?>