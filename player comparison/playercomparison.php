<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Even Cricket</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/ec1-removebg-preview.png" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="../assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/news.css">
    <link rel="stylesheet" href="../assets/css/faq.css">
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
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
                                    <a class="page-scroll" href="../index.html">Home</a>
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
                                        <li class="nav-item"><a href="./aboutEC.html">About EC</a></li>
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

    <!-- ========================= Main start ========================= -->
    <section>
        <div class="container">
        <?php
        if (isset($_GET['playerone'])) {
            $player_id1 = $_GET['playerone'];
            $url1 = "http://localhost/evenCricket/apitest/index.php?player_id=$player_id1";
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL, $url1);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
            $result1 = curl_exec($ch1);
            curl_close($ch1);
            $result1 = json_decode($result1, true);
            $result1 = $result1['data'];
            $result1 = $result1[0];
        }

        if (isset($_GET['playertwo'])) {
            $player_id2 = $_GET['playertwo'];
            $url2 = "http://localhost/evenCricket/apitest/index.php?player_id=$player_id2";
            $ch2 = curl_init();
            curl_setopt($ch2, CURLOPT_URL, $url2);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
            $result2 = curl_exec($ch2);
            curl_close($ch2);
            $result2 = json_decode($result2, true);
            $result2 = $result2['data'];
            $result2 = $result2[0];
        }
        ?>
            <table class="table text-center">
                    <tr>
                        <td><?php echo isset($result1['images'])
                            ? '<img src="' .
                                $result1['images'] .
                                '" style = "height:200px;width:auto;border-radius:50%;margin:auto;">'
                            : '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" style="height:200px;width:auto;border-radius:50%;margin:auto;">'; ?></td>
                        <td></td>
                        <td><?php echo isset($result2['images'])
                            ? '<img src="' .
                                $result2['images'] .
                                '" style = "height:200px;width:auto;border-radius:50%;margin:auto;">'
                            : '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" style="height:200px;width:auto;border-radius:50%;margin:auto;">'; ?></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1" data-bs-whatever="@playerone">Search</button>
                        </td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2" data-bs-whatever="@playertwo">Search</button>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['player_name'])
                            ? $result1['player_name']
                            : '-'; ?></td>
                        <td>Name</td>
                        <td><?php echo isset($result2['player_name'])
                            ? $result2['player_name']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['country_name'])
                            ? $result1['country_name']
                            : '-'; ?></td>
                        <td>Country</td>
                        <td><?php echo isset($result2['country_name'])
                            ? $result2['country_name']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['player_age'])
                            ? $result1['player_age']
                            : '-'; ?></td>
                        <td>Age</td>
                        <td><?php echo isset($result2['player_age'])
                            ? $result2['player_age']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['player_type'])
                            ? $result1['player_type']
                            : '-'; ?></td>
                        <td>Type</td>
                        <td><?php echo isset($result2['player_type'])
                            ? $result2['player_type']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['debut_year']) &&
                        $result1['debut_year'] != null
                            ? $result1['debut_year']
                            : '-'; ?></td>
                        <td>Debut</td>
                        <td><?php echo isset($result2['debut_year']) &&
                        $result2['debut_year'] != null
                            ? $result2['debut_year']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['matches_played'])
                            ? $result1['matches_played']
                            : '-'; ?></td>
                        <td>Matches</td>
                        <td><?php echo isset($result2['matches_played'])
                            ? $result2['matches_played']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['total_runs'])
                            ? $result1['total_runs']
                            : '-'; ?></td>
                        <td>Runs</td>
                        <td><?php echo isset($result2['total_runs'])
                            ? $result2['total_runs']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['50'])
                            ? $result1['50']
                            : '-'; ?></td>
                        <td>50</td>
                        <td><?php echo isset($result2['50'])
                            ? $result2['50']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['100'])
                            ? $result1['100']
                            : '-'; ?></td>
                        <td>100</td>
                        <td><?php echo isset($result2['100'])
                            ? $result2['100']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['highest_score'])
                            ? $result1['highest_score']
                            : '-'; ?></td>
                        <td>Highest Score</td>
                        <td><?php echo isset($result2['highest_score'])
                            ? $result2['highest_score']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['average'])
                            ? $result1['average']
                            : '-'; ?></td>
                        <td>Average</td>
                        <td><?php echo isset($result2['average'])
                            ? $result2['average']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['strike_rate'])
                            ? $result1['strike_rate']
                            : '-'; ?></td>
                        <td>Strike Rate</td>
                        <td><?php echo isset($result2['strike_rate'])
                            ? $result2['strike_rate']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['wickets'])
                            ? $result1['wickets']
                            : '-'; ?></td>
                        <td>Wickets</td>
                        <td><?php echo isset($result2['wickets'])
                            ? $result2['wickets']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['best_figures'])
                            ? $result1['best_figures']
                            : '-'; ?></td>
                        <td>Best Figures</td>
                        <td><?php echo isset($result2['best_figures'])
                            ? $result2['best_figures']
                            : '-'; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo isset($result1['economy'])
                            ? $result1['economy']
                            : '-'; ?></td>
                        <td>Economy</td>
                        <td><?php echo isset($result2['economy'])
                            ? $result2['economy']
                            : '-'; ?></td>
                    </tr>
            </table>
        </div>
    </section>
    <!-- Modal Team One -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Player</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formone">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Player Name:</label>
                            <input type="text" class="form-control" name="query" id="recipient-name">
                            <input type="hidden" name="link" value="<?php echo 'http://' .
                                $_SERVER['HTTP_HOST'] .
                                $_SERVER['REQUEST_URI']; ?>">
                            <input type="hidden" name="player" value = '1'>
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                <div id="list-of-players1"></div>
            </div>
        </div>
    </div>
    
    <!-- Modal Team Two -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Player</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formtwo">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Player Name:</label>
                            <input type="text" class="form-control" name="query" id="recipient-name">
                            <input type="hidden" name="link" value="<?php echo 'http://' .
                                $_SERVER['HTTP_HOST'] .
                                $_SERVER['REQUEST_URI']; ?>">
                            <input type="hidden" name="player" value = '2'>
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                <div id="list-of-players2"></div>
            </div>
        </div>
    </div>
    <!-- ========================= Main end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
    </a>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
            $(document).ready(function (e) {
                $("#formone").on('submit',(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "search.php",
                        type: "POST",
                        data:  new FormData(this),
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(data){
                            $("#list-of-players1").html(data);
                        }        
                    });
                }));
                $("#formtwo").on('submit',(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "search.php",
                        type: "POST",
                        data:  new FormData(this),
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(data){
                            $("#list-of-players2").html(data);
                        }        
                    });
                }));
            });
    </script>
</body>

</html>