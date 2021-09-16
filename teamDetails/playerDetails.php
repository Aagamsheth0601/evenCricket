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
    $player_id = $_GET['player_id'];
    $url = "http://localhost/evenCricket/apitest/index.php?player_id=$player_id";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);
    if ($result['result']) {
        $data = $result['data'];
        foreach ($result['data'] as $data) { ?>
            <!-- ========================= Player ========================= -->
            <div class="container">
                <h1 class="text-center"><?php echo $data['player_name']; ?></h1>
                <br><br><br>
                <div class="row">
                    <div class="col-md-6">
                        <img src="https://timesofindia.indiatimes.com/photo/69257289.cms" alt="" style="width:350px; height:300px;">
                        <br><br><br>
                        <div class="general-detail">
                            <h3>General Stat</h3>
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row">Nation</th>
                                    <td><?php echo $data[
                                        'country_name'
                                    ]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Matches</th>
                                    <td><?php echo $data[
                                        'matches_played'
                                    ]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Player Type</th>
                                    <td><?php echo $data['player_type']; ?></td>
                                </tr>
                                </tr>
                            </table>
                        <br><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="batting-detail">
                            <h3>Batting Stat</h3>
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row">Runs</th>
                                    <td><?php echo $data['total_runs']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Half Century</th>
                                    <td><?php echo $data['50']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Century</th>
                                    <td><?php echo $data['100']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Highest Score</th>
                                    <td><?php echo $data[
                                        'highest_score'
                                    ]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Batting Average</th>
                                    <td><?php echo $data['average']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Strike Rate</th>
                                    <td><?php echo $data['strike_rate']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <br><br>
                        <div class="bowling-stat">
                            <h3>Bowling Stat</h3>
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row">Wickets</th>
                                    <td><?php echo $data['wickets']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Best Figures</th>
                                    <td><?php echo $data[
                                        'best_figures'
                                    ]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Economy</th>
                                    <td><?php echo $data['economy']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========================= Player ========================= -->

    <?php }
    } else {
         ?>
        <h1 class="text-center">404</h1>
    <?php
    }
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