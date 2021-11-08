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
                    <a class="dropdown-item" href="AddBook.php">Ajouter un livre</a>
                    <a class="dropdown-item" href="UpdateBook.php">Modifier un livre</a>
                    <a class="dropdown-item" href="Deletebook.php">Spprimer un livre</a>
                    <a class="dropdown-item" href="Deletebook.php">mes livres</a>
                </div>
            </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            </form>

    </div>
    <a href="includes/LogoutAuthor.php" class="btn btn-danger pull-right">LOG OUT</a>
</nav>