
	<?php


  $login = $_GET['l'];
  $password = $_GET['pass'];
  
  $a= mysqli_connect('localhost','root','','mabase');

  $sql = "INSERT INTO user VALUES(null, '$login', '$password')";

 mysqli_query($a,$sql);

  header('location:index.php');
      
?>
