<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - G5 cafe Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light" style="background: linear-gradient(90deg, #00bfff 0%, #182848 100%); box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 text-white fw-bold" href="index.php" style="letter-spacing: 1.5px;">G5 Internet Cafe</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white" id="sidebarToggle" href="#!" style="text-shadow: 0 0 5px rgba(255,255,255,0.7);"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control border-0" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" style="box-shadow: 0 0 5px rgba(0,191,255,0.7);" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button" style="background-color: #182848; border: none; box-shadow: 0 0 5px rgba(0,191,255,0.7);"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="box-shadow: 0 4px 8px rgba(0,0,0,0.15);">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background: linear-gradient(180deg, #00bfff 0%, #182848 100%); box-shadow: 2px 0 6px rgba(0,0,0,0.1);">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading text-white">Core</div>
                            <a class="nav-link text-white" href="index.php" style="transition: background-color 0.3s ease;">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading text-white">Interface</div>
                            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" style="transition: background-color 0.3s ease;">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Job Listings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link text-white" href="job.php">Listings</a>
                                    <a class="nav-link text-white" href="manager.php">Manager</a>
                                    <a class="nav-link text-white" href="hr.php">Human Resource</a>
                                    <a class="nav-link text-white" href="sa.php">System Administrator</a>
                                    <a class="nav-link text-white" href="lab.php">Lab Technician</a>
                                </nav>
                            </div>
                            <a class="nav-link text-white" href="booking.php" style="transition: background-color 0.3s ease;">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Bookings
                            </a>
                </nav>
            </div>
            <div id="layoutSidenav_content">
