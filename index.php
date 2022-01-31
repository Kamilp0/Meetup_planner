<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Meetup Planner</title>
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
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="index.php">Meetup Planner</a>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Cerca..." aria-label="Cerca..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./frontend/profilo utente.php">Profilo</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="./backend/logout_back.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="home_content">
    <main>
        <div class="container-fluid pt-5 px-5">
            <div class="row">
                <div class="col-4">
                    <div class="p-5" style="width: 21rem;">
                        <img style="height: 250px; width: 250px" src="assets/img/envelope-regular.svg" class="card-img-top" alt="Responsive image">
                        <div class="card-body">
                            <h5 class="card-title">Inviti</h5>
                            <p class="card-text">Visualizza tutti gli eventi a cui sei stato invitato.</p>
                            <a href="./frontend/inviti.php" class="btn btn-primary">Vedi inviti</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="p-5" style="width: 21rem;">
                        <img style="width: 250px; height: 250px" src="assets/img/calendar-check-regular.svg" class="card-img-top" alt="Responsive image">
                        <div class="card-body">
                            <h5 class="card-title">Iscrizioni confermate</h5>
                            <p class="card-text">Visualizza tutti gli eventi ai quali hai confermato la tua partecipazione.</p>
                            <a href="./frontend/iscrizioni%20confermate.php" class="btn btn-primary">Vedi riunioni confermate</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="p-5" style="width: 21rem;">
                        <img style="width: 250px; height: 250px;" src="assets/img/chalkboard-teacher-solid.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Le mie riunioni</h5>
                            <p class="card-text">Gestici le tue riunioni. Organizza, modifica o cancella una riunione.</p>
                            <a href="./frontend/le%20mie%20riunioni.php" class="btn btn-primary">Vai alle riunioni</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="p-5" style="width: 21rem;">
                        <img style="width: 250px; height: 250px" src="assets/img/users-solid.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gestisci utenti</h5>
                            <p class="card-text">Gestisci i dati utente del personale dell'azienda.</p>
                            <a href="./frontend/gestione%20utenti.php" class="btn btn-primary">Vai agli utenti</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="p-5" style="width: 21rem;">
                        <img style="height: 250px; width: 250px" src="assets/img/building-regular.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gestisci sale</h5>
                            <p class="card-text">Inserisci nel sistema nuove sale adibite a sale riunioni, o rimuovi dal sistema quelle che non possono più essere utilizzate. </p>
                            <a href="./frontend/gestione%20sale.php" class="btn btn-primary">Vai alle sale</a>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <?php require './common/footer.html'; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="./js/datatables-simple-demo.js"></script>
</body>
</html>