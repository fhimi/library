<?php
//database_connection
function connecter_db()
{
    // ERR_MODE : warning_mode , silent_mode , exception_mode

    try {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $cnx = new PDO("mysql:host=localhost;dbname=librarie", 'root', '', $options);
        // $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $cnx->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Erreur de connexion bd ' . $e->getMessage();
    }
    return $cnx;
}

//demarrer une session 
function demarrer_session()
{
    if (!isset($_SESSION)) {
        session_start();
    }
}

//login
function verifier_acces($login, $passe)
{
    try {
        //connexion db 
        $cnx = connecter_db();
        //preparer la requete
        $rp = $cnx->prepare("SELECT email, password, status, profile FROM auteur where email=? and password = ?"); //protection contre l'injection SQL 
    
        //exection de la requete dans la cnx 
        $rp->execute([$login, $passe]);
        //extraction fetchAll
        $resultat = $rp->fetch(); //liste 
        if (empty($resultat)) {
            header("location:../AuthorLogin.php");
        }else{
            demarrer_session();
                $_SESSION['status'] = $resultat['status'];
                $_SESSION['pass'] = $resultat['password'];
                $_SESSION['mail'] = $resultat['email'];
                header("location:../dashboard.php");
        } 
    } catch (PDOException $e) {
        echo "Erreur d'authentification " . $e->getMessage();
    }
}
?>