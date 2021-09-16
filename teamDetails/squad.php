<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Even Cricket</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/ec1-removebg-preview.png" />

    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="../assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- ========================= header start ========================= -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="../assets/img/ec1-removebg-preview.png" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item home">
                                    <a class="page-scroll" href="javascript:void(0)">Home</a>
                                </li>
                                <li class="nav-item fixtures">
                                    <a class="page-scroll" href="fixtures.html">Fixtures</a>
                                </li>
                                <li class="nav-item teams">
                                    <a class="page-scroll" href="./teams.html">Teams</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                        data-bs-toggle="collapse" data-bs-target="#submenu-1-3"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">Rankings</a>

                                    <ul class="sub-menu collapse" id="submenu-1-3">
                                        <li class="nav-item"><a href="#0">Team Ranking</a></li>
                                        <li class="nav-item"><a href="#0">Player Ranking</a></li>
                                        <li class="nav-item"><a href="#0">Player Comparison</a></li>
                                        <li class="nav-item"><a href="#0">Team Predictor</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu collapsed" href="javascript:void(0)"
                                        data-bs-toggle="collapse" data-bs-target="#submenu-1-4"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">More</a>

                                    <ul class="sub-menu collapse" id="submenu-1-4">
                                        <li class="nav-item"><a href="#0">About EC</a></li>
                                        <li class="nav-item"><a href="#0">EC on social media</a></li>
                                        <li class="nav-item"><a href="champions.html">Champions through the years</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!-- navbar collapse -->
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </header>
    <!-- ========================= header end ========================= -->

    <!-- ========================= Spacer ========================= -->
    <div style="height:150px;"></div>
    <!-- ========================= Spacer ========================= -->

    <?php
    $team_id = $_GET['team_id'];
    $url = "http://localhost/evenCricket/apitest/index.php?team_id=$team_id";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);
    if ($result['result']) { ?>
        <div class="container">
            <h2><?php echo $result['country']; ?> Players</h2>
            <hr>
            <div class="row">
                    <?php foreach ($result['data'] as $data) { ?>
                            <br><br><br><br><br><br><br><br><br>
                            <div class="col-md-6">
                                <a href="./playerDetails.php?player_id=<?php echo $data[
                                    'player_id'
                                ]; ?>">
                                    <div style="display:inline-block;">
                                        <img src="https://img1.hscicdn.com/image/upload/f_auto,t_h_100/lsci/db/PICTURES/CMS/302300/302377.jpg" class="img img" style="height: 100px; width: 100px;border-radius: 50%;">
                                    </div>
                                    <div style="display:inline-block;">
                                        <h3><?php echo $data[
                                            'player_name'
                                        ]; ?></h3>
                                        <p><?php echo $data[
                                            'player_name'
                                        ]; ?></p>
                                        <p>Age: <?php echo $data[
                                            'player_age'
                                        ]; ?></p>
                                    </div>
                                </a>
                            </div>
                    <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        <h1 class="text-center">404</h1>
    <?php }
    ?>
    
    <!-- ========================= JS here ========================= -->
    <script src="../assets/js/bootstrap.bundle-5.0.0-beta1.min.js"></script>
    <script src="../assets/js/contact-form.js"></script>
    <script src="../assets/js/count-up.min.js"></script>
    <script src="../assets/js/tiny-slider.js"></script>
    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/glightbox.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/imagesloaded.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>