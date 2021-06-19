<?php $a= mysqli_connect('localhost','root','','mabase');
    $b="select * from user ";
    $resultat=mysqli_query($a,$b);
          
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Accès aux bases de données</title>
</head>
<body background="bb.jpg" ><br><br><br>
<h1 align="center" style="color: white ">Affichage de la table USER</h6><br><br>
<table class="table" style="width : 50%" align="center">
	<form  method="GET" action="ajouter.php" >
	<tr class="table-dark" >
		<td>ID</td>
        <td>LOGIN</td>
        <td>PASSWORD</td>
        <td>DELETE</td>
        <td>UPDATE</td>
	</tr>
	<tr>
		<td><font color="white">#</font></td>
        <td><input class="form-control" type="text" name="l" required></td>
        <td><input class="form-control" type="password" name="pass" required></td>
        <td colspan="2" align="center">

            <button style="width : 200px" class="btn btn-success">Ajouter</button>
        </td>
	</tr>
	<?php 
	while($row=mysqli_fetch_array($resultat)){ ?>
		<tr> 
                  <td ><font color="white"><?php echo $row['id'] ?></font></td> 
                   <td ><font color="white"><?php echo $row['login'] ?></font></td> 
                   <td ><font color="white"><?php echo $row['password'] ?></font></td>
                   <td><a Onclick="return confirm('Etes vous sur de vouloir supprimer le utilisateur?')" href="supprimer.php?id=<?php echo $row['id']; ?>" class="link-danger">delete</a></td>
                   <td><a href="modifier.php?id=<?php echo $row['id']; ?>" class="link-warning">update</a></td>
         </tr>  <?php } ?>         
</form>
</table>

</body>
</html>