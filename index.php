<?php 
require_once('ListeTache.php') ;
require_once('Tache.php'); 
if(isset($_POST["titre"] , $_POST["descriptions"] , $_POST["date_echeance"] ,  $_POST["status"]) ) {
    $lta = new ListeTache() ;
    $tac = new Tache($_POST["titre"], $_POST["descriptions"], $_POST["date_echeance"] , $_POST["status"]);
    $lta->ajouterTache($tac) ;
  

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>Planification Des Taches</h2>
        <input type="text" name="titre" placeholder="Titre de la tache :" required>
        <textarea type="text" name="descriptions" placeholder="Descriptions" required> </textarea>
        <input type="date" name="date_echeance" id="" placeholder="Date d'échéance" required>
        <select name="status" value="" required><br>
            <option name="Attente" id="">En attente</option>
            <option name="cours" id="">En cours</option>
            <option name="terminer" id="">Terminé</option>
        </select>
        <button type="submit">Vérifier</button>

    </form>
    <div class="grid">
        <?php if(isset($lta)){$lta -> getTaches() ; } ?>
    </div>
    
</body>
</html>









