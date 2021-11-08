<?php
include("includes/config.php");

try {
    $cnx = connecter_db();
                if (!isset($_SESSION)) {
                    session_start();
                }
                    $rc = $cnx->prepare("SELECT l.id, l.nom as nm ,  l.description as des, idAuteur, l.idCat ,c.nom as cn FROM  livre l, categorie c  where l.id = ? and idCAt= c.id "); //protection contre l'injection SQL 
                    $rc -> execute(array($_GET['c']));
                    $book = $rc-> fetchAll();

                    $rn = $cnx->prepare("SELECT id, nomComplet as nc FROM  auteur ");
                    $rn -> execute();
                    $auteur = $rn-> fetchAll();
                    
                    

                    if (empty($book) || empty($auteur) ) {
                        echo '<script>alert("error")</script>';
                    }
            
            
    
  //getting all books

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-wi  dth, initial-scale=1.0">
    <title>description</title>
    <script>
    .why - edit {
            margin: 40 px 0;
            background - image: url(.. / images / pentagon.jpg);
            height: auto;
            background - attachment: fixed;
            background - position: top;
            background - repeat: no - repeat;
            background - size: cover;
            padding: 97 px 0;
            background: #aed8f0;
        }
        .why - edit - box {
            background: #fff;
            padding: 37 px;
            box - shadow: 0 0 10 px 0 #ddd;
            margin - bottom: 30 px;
            height: 100 %
        }
        .why - edit - box img {
            position: absolute;
            bottom: 0;
            right: 37 px;
            width: 137 px;
            opacity: .1
        }
        .why - edit - box h3 {
            margin: 0;
            padding - top: 10 px;
            line - height: 1.1 em;
            color: #14365C;
        font-family: 'Open Sans',Arial,sans-serif;
        font-weight: 600;
        }
        .why-edit-box h3::after {
        position:absolute;
        content:'';
        height:10px;
        margin:0 auto;
        left:0;
        top:9%;
        width:50%;
        background:# f79418
        }
        .why - edit - box p {
            margin: 0;
            margin - top: 0 px;
            font - size: 15 px;
            line - height: 26 px;
            margin - top: 20 px;

        }
        .why - edit.row.col - md - 4 {
            margin - bottom: 30 px;
        }
    </script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboardReader.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ProfileAuthor.php">profile des auteurs</a>
                </li>
                <form action="searchAuthor.php" method="post" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search book"
                        aria-label="Search">
                    <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search">

                </form>

        </div>
        <a href="includes/LogoutAuthor.php" class="btn btn-outline-danger my-2 my-sm-0">LOG OUT</a>
    </nav>

    <section class="why-edit">
        <div class="container">
            <div class="row">
                <?php 
                    foreach ($book as $row ) {
                        foreach ($auteur as $row1 ){
                        if ($row['idAuteur']== $row1['id'] ) {
                            
                        
                ?>
                <div class="col-md-4">
                    <div class="why-edit-box">
                        <h3>Nom: <?php echo $row['nm']; ?></h3>
                        <br>
                        <h4>Nom Author: <?php echo $row1['nc']; ?></h4>
                        <br>
                        <h4>Description: <?php echo $row['des']; ?></h4>
                        <img src="assets/js/images/book_black.png" alt="Book Icon">
                    </div>
                </div>
                <?php 
                    }
                }
                }
                ?>
            </div>
        </div>
    </section>
    <?php 
} catch (PDOException $e) {
    echo "Erreur d'authentification " . $e->getMessage();
}
?>

    <!-- CONTENT-WRAPPER SECTION END-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>