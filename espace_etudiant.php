<?php 
session_start();
if(isset($_SESSION['mail'])&&isset($_SESSION['password'])){
$var=$_SESSION['mail']; $mot=$_SESSION['password']; }
else { header('Location:authentification.php'); }

//connexion avec le serveur (APACHE)
$username = "root";
$password = "";
$hostname = "localhost";
// activer le rapport d'erreur
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connection string with database
$dbhandle = mysqli_connect($hostname, $username, $password);
// connect with table
$selected = mysqli_select_db($dbhandle, "facultybd");

// Query the database to check if the user exists
$sql = "SELECT * FROM user WHERE mail='$var' AND password='$mot'";
$result = mysqli_query($dbhandle, $sql);
// stocker les donnees dans une ligne d'un tableau
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace étudiant</title>
</head>
<body>
<nav>
  <ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="form_inscreption.php">Inscreption</a></li>
    <li><a href="logout.php">Se déconnecter</a></li>
  </ul>
</nav>
<B>Welcom <?php echo $row['nom']; echo "  "; echo $row['prenom'];?></B>
</body>
</html>