<?php
include("includes/config.php");
try {
    
                //connexion db 
                $cnx = connecter_db();
                if (!isset($_SESSION)) {
                    session_start();
                }
                    $rc = $cnx->prepare("SELECT l.nom, l.prix , l.description, l.nbrcopie, a.nomComplet FROM auteur a , livre l where l.idAuteur = a.id AND l.nom like ?"); //protection contre l'injection SQL 
                    $rc->execute(array('%'.$_POST['search'].'%'));
                    $book = $rc-> fetchAll();
                    if (empty($book)) {
                        echo '<script>alert("no data found")</script>';

                    }
                    else {
  //getting all books
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/library.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords"
        content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>


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
                    <a class="nav-link" href="searchAuthor.php">profile des auteurs</a>
                </li>
                <form class="form-inline my-2 my-lg-0" action="searchAuthor.php" method='post'>
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search book"
                        aria-label="Search">
                    <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search">

                </form>

        </div>
        <a href="includes/LogoutAuthor.php" class="btn btn-outline-danger my-2 my-sm-0">LOG OUT</a>
    </nav>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <?php 
    foreach ($book as $row ) {
       
    
    ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <a href="file:///C:/Users/hp/Downloads/launcher/buy.html"><img src="assets/js/images/book_black.png"
                            class="card-img-top" alt="..." height="400"></a>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0"><?php echo $row['nom']; ?></h5>
                        <div class="card-text text-black-50"><?php echo $row['nomComplet']; ?></div>
                        <div>
                            <a href="descriptionBook.php" class="btn btn-outline-light"><img
                                    src="assets/js/images/icons8-bookmark-30.png" height="26" alt="" /></a>
                            <a href="BuyBook.php" class="btn btn-outline-light"><img
                                    src="https://img.icons8.com/ultraviolet/40/000000/shopping-cart-loaded--v2.png" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
    ?>
        </div>
        <?php 
        }
} catch (PDOException $e) {
    echo "Erreur d'authentification " . $e->getMessage();
}

?>

    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>

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