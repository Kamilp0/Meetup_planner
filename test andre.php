<!DOCTYPE html>
<html lang="en">
<!--HEAD-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Gestione sale</title>
    <link href="./css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0a8f02362e.js" crossorigin="anonymous"></script>
    <style>
        #home_content {
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-width: 0;
            flex-grow: 1;
            min-height: calc(100vh - 56px);
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
        }
    </style>
</head>
<body class="sb-nav-fixed">
<!--TOP NAVBAR-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Meetup Planner</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Cerca..." aria-label="Cerca..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="">Profilo</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

<!--    <div id="layoutSidenav">-->
<!--            SIDE BAR-->
<!--    --><?PHP
//
//    require "./common/sidebar admin.php";
//
//    ?>

    <div id="home_content">
        <main>
            <div class="container-fluid pt-5 px-5">
                <!--            CONTENT-->
                <div class="row">
                    <div class="col-4">
                        <div class="p-5" style="width: 21rem;">
                            <img src="assets/img/error-404-monochrome.svg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Calendario</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="./frontend/login.html" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-5" style="width: 21rem;">
                            <img src="assets/img/error-404-monochrome.svg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="p-5" style="width: 21rem;">
                            <img src="assets/img/error-404-monochrome.svg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <?PHP
        require "./common/footer.html"

        ?>
    </div>


    <!--    </div>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!--    <script src="./js/scripts.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="./js/datatables-simple-demo.js"></script>
</body>
</html>