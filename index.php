<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYTOTOOL</title>
    <link rel="icon" href="images/mytotool_favicon.ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
 
 $erreurs = "";
 $db = new PDO('mysql:host=localhost;dbname=mytotool', 'root', '');

 if (isset($_POST['creer_tache'])) {
    if (empty($_POST['creer_tache'])) {
        $erreurs = 'Vous devez indiquer la valeur de la tâche';
    } else{
        $tache = $_POST['creer_tache'];

        $db->query("INSERT INTO liste(tache) VALUES('$tache')"); // Insérer la tâche dans la base de donnée
    }
 }

 if(isset($_GET['supprimer_tache'])) {
     $id = $_GET['supprimer_tache'];
     $db->exec("DELETE FROM liste WHERE id=$id");
 }

 ?>

<div id="navbar">
    <img id="logo" src="images/mytotool.png" alt="logo">
    <p id="deconnexion"><a href="login.php"> Déconnexion</a></p>
</div>

<div class="header">
    <p class="header_titre">Vos tâches à réaliser : </p>
</div>
 
 <div id="back">
    <form class="taches_input" method="post" action="index.php">
        <input id="insert" type="text" name="creer_tache"/>
        <button id="send">Créer</button>
    </form>
</div>

 <!-- Pour les erreurs -->
    <?php
   if (isset($erreurs)) {
       ?>
       <p><?php echo $erreurs ?></p>
   <?php
   }
   ?>

 
<table class="taches">
    <tr>
        <th>
            Numéro
        </th>
        <th>
            Nom de la tâche
        </th>
        <th>
            Supprimer
        </th>
    </tr>
    <?php
    $reponse = $db->query('Select * from liste'); // On récupère les tâches
    while ($taches = $reponse->fetch()) { // On fait une boucle
        ?>
        <tr>
            <td><?php echo $taches['id'] ?></td>
            <td><?php echo $taches['tache'] ?></td>
            <td><a class="suppr" href="index.php?supprimer_tache=<?php echo $taches['id'] ?>"><img src="images/croix.png" alt="Supprimer la tâche"></a></td>
        </tr>
        <?php
    }
 
 
    ?>
 
 
</table>
</body>
</html>