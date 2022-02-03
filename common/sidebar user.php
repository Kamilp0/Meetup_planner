<?php session_start(); ?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Area personale</div>
                <a class="nav-link" href="../index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-house-user"></i></div>
                    Homepage
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="far fa-calendar-alt"></i></div>
                    Calendario
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="../frontend/inviti.php">
                            <div class="sb-nav-link-icon"><i class="far fa-envelope"></i></div>
                            Inviti
                        </a>
                        <a class="nav-link" href="../frontend/iscrizioni%20confermate.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                            Iscrizioni confermate
                        </a>
                        <a class="nav-link" href="../frontend/iscrizioni%20rifiutate.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-times"></i></div>
                            Iscrizioni<br>rifiutate
                        </a>
                    </nav>
                </div>
                <a class="nav-link" href="../frontend/le%20mie%20riunioni.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    Le mie riunioni
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Accesso effettuato come:</div>
            <?php echo $_SESSION['user_data']['nome'] .
                ' ' .
                $_SESSION['user_data']['cognome'] .
                ' '; ?>
        </div>
    </nav>
</div>