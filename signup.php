<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <title>Inscription</title>
</head>
<body>
<div class="container">
		<div class="row">
		  <div class="col-md-6 offset-md-3">
			<div class="card shadow">
			  <div class="card-body">
				<h2 class="text-center mb-4" style="color: #6c757d">Inscription</h2>
<form action="ajouter_etudiant.php" method="post">
<div class="form-group">
    <label>Nom :  </label>   
    <input type="text" name="nom"/><br>
	</div>
	<div class="form-group">
    <label>prenom :</label>     
    <input type="text" name="prenom" /><br>
	</div>
    <label> Mail :</label> 
	<div class="form-group">
    <input type="email" name="mail" /><br>
	</div>
	<div class="form-group">
    <label> Mot de passe :</label> 
    <input type="password" name="mdp" /><br>
	</div>
    <input type="submit" name="submit" /> 
    <input type="reset" name="reset" />
</form>
</div>
			</div>
		  </div>
		</div>
	  </div>
</body>
</html>