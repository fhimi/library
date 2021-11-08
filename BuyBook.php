<?php
include("includes/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acheter livre</title>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <script>
    body {
        margin - top: 20 px;
    }
    .panel - title {
            display: inline;font - weight: bold;
        }
        .checkbox.pull - right {
            margin: 0;
        }
        .pl - ziro {
            padding - left: 0 px;
        }
    </script>
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
                    <a class="nav-link" href="ProfileAuthor.php">profile auteur</a>
                </li>
                <form action="searchAuthor.php" method="post" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search book"
                        aria-label="Search">
                    <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search">

                </form>

        </div>
        <a href="includes/LogoutAuthor.php" class="btn btn-outline-danger my-2 my-sm-0">LOG OUT</a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Payment Details
                        </h3>
                        <div class="checkbox pull-right">
                            <label>
                                <input type="checkbox" />
                                Remember
                            </label>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="cardNumber">
                                    CARD NUMBER</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cardNumber"
                                        placeholder="Valid Card Number" required autofocus />
                                    <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-lock"></span></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="expityMonth">
                                            EXPIRY DATE</label>
                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                            <input type="text" class="form-control" id="expityMonth" placeholder="MM"
                                                required />
                                        </div>
                                        <div class="col-xs-6 col-lg-6 pl-ziro">
                                            <input type="text" class="form-control" id="expityYear" placeholder="YY"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cvCode">
                                            CV CODE</label>
                                        <input type="password" class="form-control" id="cvCode" placeholder="CV"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><span class="badge pull-right"><span
                                    class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
                    </li>
                </ul>
                <br />
                <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
            </div>
        </div>
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

</body>

</html>