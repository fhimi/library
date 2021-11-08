<?php
include("includes/config.php");
include("includes/headerAuthor.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter livre</title>

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
    <script src="https://apps.elfsight.com/p/plataq" aform.js" defer></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">AUTHOR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">profile</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="Comments" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        livre
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="AddBook.php ?>">Ajouter un
                            livre</a>
                        <a class="dropdown-item" href="UpdateBook.php">Modifier un livre</a>
                        <a class="dropdown-item" href="Deletebook.php">Spprimer un livre</a>
                    </div>
                </li>
                <form action="searchAuthor.php" method="post" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search book"
                        aria-label="Search">
                    <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search">

                </form>

        </div>
        <a href="includes/LogoutAuthor.php" class="btn btn-outline-danger my-2 my-sm-0">LOG OUT</a>
    </nav>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="form-horizontal" role="form" action="add.php?ida=<?php echo $_GET['idaut']; ?>" method="post">
                <fieldset>

                    <!-- Form Name -->
                    <legend>supprimer Livre</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Nom: </label>
                        <div class="col-sm-10">
                            <input type="text" name="Nom" placeholder="Nom" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-default">annuler</button>
                                <button type="submit" class="btn btn-primary">Supprimer</button>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div><!-- /.col-lg-12 -->
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