    <?php
    session_start();
    include('connection.php');
    include("functions.php");
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale= 0.68" name="viewport">
        <title><?= $title ?? "PHONE DIRECTORY"?></title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link rel="shortcut icon" type="x-icon" href="assets/img/app.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    </head>

    <style>
        body {
            background-image: url('assets/img/back.png');
        }
    </style>

    <header id="header" class="fixed-top header-inner-pages">

        <div class="container d-flex align-items-center">
            <a href="index.php" class="logo me-auto text-white fs-5">
                <img src="assets/img/app.png">
                <?= $title ?? "PHONE DIRECTORY" ?>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <?php if (isset($_SESSION['user_id'])) { ?>
                        <li><a class="nav-link scrollto" href="index.php">Home</a></li>
                        <li><a class="nav-link scrollto" href="admindex.php">Admin Dashboard</a></li>
                        <li><a class="getstarted scrollto" href="logout.php" style="background-color: red;">Logout</a></li>
                         
                    <?php } else { ?>
                        <li><a class="nav-link scrollto" href="help.php">Help?</a></li>
                        <!-- <li><a class="getstarted scrollto" href="login.php">Admin Login</a></li> -->
                    <?php }
                    ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <main id="main">