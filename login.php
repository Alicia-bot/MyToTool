<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion MYTOTOOL</title>
    <link rel="icon" href="images/mytotool_favicon.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="navbar">
    <img id="logo" src="images/mytotool.png" alt="logo">
    </div>
    <div id="container">
        <form action="verification.php" method="POST">
            <h1>Connexion</h1>
            
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='SE CONNECTER' >
        </form>
    </div>

</body>

</html>