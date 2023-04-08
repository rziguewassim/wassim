<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Etudiant</title>
</head>
<body>
<?php
//connexion avec le serveur (APACHE)
  $username = "root";
  $password = "";
  $hostname = "localhost";
  // enable error reporting
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  
// connection string with database
$dbhandle = mysqli_connect($hostname, $username, $password);

// connect with database
$selected = mysqli_select_db($dbhandle, "facultybd");

  
  // Vérifier si le formulaire est soumis 
  if ( isset( $_POST['submit'] ) ) {
      /* récupérer les données du formulaire en utilisant 
         la valeur des attributs name comme clé 
      */
      $nom = $_POST['nom']; 
      $prenom = $_POST['prenom'];
      $mail = $_POST['mail']; 
      $mdp = $_POST['mdp'];
      

       // définition de la requete + execution de la requete
$result = mysqli_query($dbhandle, "INSERT INTO  `etudiants` (nom,prenom,mail,password)VALUES ('$nom',  '$prenom',  '$mail',  '$mdp');");
if($result ){
    echo"Inscription effectuer avec succes!!";
}else{
    echo"Echec lors de l'inscreption!";
}
 }
 mysqli_close($dbhandle); // fermer la connexion
?> 
</body>
</html>