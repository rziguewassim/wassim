<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez si le mail d'utilisateur et le password sont définis
    if (isset($_POST['mail']) && isset($_POST['password'])) {
        // Escape special characters in username and password to prevent SQL injection attacks
        $username = mysqli_real_escape_string($dbhandle, $_POST['mail']);
        $password = mysqli_real_escape_string($dbhandle, $_POST['password']);

        // Query the database to check if the user exists
        $sql = "SELECT * FROM user WHERE mail='$username' AND password='$password'";
        $result = mysqli_query($dbhandle, $sql);

        // If the query returns one row, then the user exists and we can start a session
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['mail'] = $username;
            $_SESSION['password'] = $password; 
            header('Location: espace_etudiant.php');
            exit;
        } else {
            // If the query returns zero rows, then the user doesn't exist or the password is wrong
            echo "Invalid username or password.";
        }
    }
}

$dbhandle->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>
<body>
<form name="connexion"  method="post" onsubmit="return test()" >
        <label > Mail </label>
        <input type="email" name="mail" placeholder="SVP entrez votre Mail ! !"/>
        <br>
        <br>
        <label > Password </label>
        <input type="password" name="password" placeholder="SVP entrez votre mot de passe ! !"/>
        <br>
        <br>
        <input type="submit" value="Se Connecter">
        <!--<input type="button" value="Se Connecter" onclick="test()">-->
        <input type="reset" value="Annuler">

    </form>
    <script>
        function test() {
            var login = connexion.mail.value;
            var pwd = connexion.password.value;
            var a = "@";
            

            if (login.length === 0 || pwd.length === 0) {
                alert("Vérifier votre login et votre de mot de passe");
                return false;
            }
            else {
                if (pwd.length < 8 || pwd.length > 8) {
                    alert("Votre mot de passe doit avoir une longueur égale à 8 caractères");
                    return false;
                }

                if (login.substring(login.indexOf(a)) != '@gmail.com') {
                    alert("Votre de mot de passe doit avoir une adresse gmail");
                    return false;
                } 
            }
        }
    </script>


</body>
</html>