<?php
include("includes/config.php");
$cnx = connecter_db();
    //preparer la requete
    $rp = $cnx->prepare("insert into livre(nom , prix , description, status, nbrcopie, idAuteur, idCat) values( ? , ? , ? , ? , ?, ?, ? )"); //protection contre l'injection SQL 
    //exection de la requete dans la cnx 
    $rp->execute([$_POST['Nom'], $_POST['Prix'], $_POST['description'], $_POST['valable'], $_POST['quantité'], $_GET['ida'], $_POST['Catégorie'] ]);
    $r = $rp->fetch(PDO::FETCH_ASSOC);
    echo '<script>alert("ajout avec succes")</script>';
?>