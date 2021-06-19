<?php $a= mysqli_connect('localhost','root','','mabase');
$id=$_GET['id'];
    $b="select * from user where id=$id ";
    $resultat=mysqli_query($a,$b);
    $row=mysqli_fetch_array($resultat);
          if(! $row){
            header("location:index.php?erreur=1");
          }
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"><br><br>
	<title>Accès aux bases de données</title>
</head>
<body background="bb.jpg">
<h1 align="center" style="color: white ">Modifier l'utilisateur <?php echo $_GET['id'];?> </h6><br><br>
<table class="table" style="width : 50%" align="center" >
	<form  method="GET" action="valider.php" >

	<tr class="table-dark">
		<td>Nouveau login : </td>
        <td><input type="hidden" name="id2" value="<?php echo $row['id'] ?>" />
          <input class="form-control" type="text" name="n1"value="<?php echo $row['login'] ?>" required>
        </td>
	</tr>
	<tr class="table-dark">

		<td>Nouveau password : </td>
        <td><input class="form-control" type="password" name="n2"value="<?php echo $row['password'] ?>" id="motdepasse" required><br>
        <input type="checkbox" onclick="Afficher()"> Afficher le mot de passe
      </td>
    </tr>
        <tr >
            <td colspan="2"><button style="width : 100%" class="btn btn-success">Valider</button></td>
        
	</tr>
	        
</form>
</table>
<script>
function Afficher()
{ 
var input = document.getElementById("motdepasse"); 
if (input.type === "password")
{ 
input.type = "text"; 
} 
else
{ 
input.type = "password"; 
} 
} 
</script>
</body>
</html>