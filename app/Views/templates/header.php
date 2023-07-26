<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iskar Web Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <div class="container">
            <!-- NAV BAR-->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="#" class="navbar-brand">
                        <img src="<?=base_url('/public/assets/images/iskar/')?>logo.png" alt="Iskar Logo" height="35">
                        <span class="navbar-text h1 align-middle">ISKAR</span>
                    </a>
                    <!-- FIN DE LOGO -->
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <!-- Menu -->
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Inicio</a>
                            </li>
                            <!-- 
                            <li class="nav-item">
                                <a href="#" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contáctenos</a>
                            </li> -->
                        </ul>
                    </div>
                    <!-- fin menu-->
                </div>
            </nav>
            <!-- FIN DE NAV BAR-->
        </div>
    </header>
