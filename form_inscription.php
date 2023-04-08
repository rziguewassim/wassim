<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<form action="ajouter_etudiant.php" method="post">
    <label>Nom :  </label>   
    <input type="text" name="nom"/><br>
    <label>prenom :</label>     
    <input type="text" name="prenom" /><br>
    <label> Mail :</label> 
    <input type="email" name="mail" /><br>
    <label> Mot de passe :</label> 
    <input type="text" name="mdp" /><br>
    <input type="submit" name="submit" /> 
    <input type="reset" name="reset" />
</form>
</body>
</html>