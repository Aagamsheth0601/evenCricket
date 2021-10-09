<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Fixtures | EC</title>
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

    <!-- fixture -->
    <link rel="stylesheet" href="fixture_css/animate.css">
    <link rel="stylesheet" href="fixture_css/cricket_style.css">
    <link rel="stylesheet" href="fixture_css/customScrollbar.css">
    <link rel="stylesheet" href="fixture_css/flaticon.css">
    <link rel="stylesheet" href="fixture_css/font-awesome.css">
    <link rel="stylesheet" href="fixture_css/fonts.css">
    <link rel="stylesheet" href="fixture_css/magnific-popup.css">
    <link rel="stylesheet" href="fixture_css/owl.carousel.css">
    <link rel="stylesheet" href="fixture_css/owl.theme.default.css">
    <link rel="stylesheet" href="fixture_css/select2.min.css">
    <script>
        document.getElementsByTagName("html")[0].className += " js";
    </script>
    <link rel="stylesheet" href="fixture_css/style.css">

</head>

<body>
    <!-- ========================= Preloader Navbar start ========================= -->
    <style>
        .navbar-area a {
            font-family: "Poppins", sans-serif;
        }

        #fixtures-navbar {
            border-bottom: 2px solid blue;
        }
    </style>
    <div id="navbar"></div>
    <script>
        $(document).ready(function() {
            $("#navbar").load("../navbar.html");
        });
    </script>
    <!-- ========================= Preloader Navbar End ========================= -->

    <!-- ========================= feature-section start ========================= -->







    <style>
        .img {
            vertical-align: middle;
            border-style: none;
            height: 70px;


            width: 100px;
        }

        ul.no-bullets {
            list-style-type: none;
        }

        a {
            text-decoration: none;
        }

        .js .cd-h-timeline__date--selected::after {
            background-color: hsl(209, 100%, 50.6%);
            border-color: hsl(225.3, 81.8%, 56.9%);
        }
    </style>

    <br><br>

    <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
        <p class="text-center margin-top-md timeline margin-bottom-xl">
            <a class="text--inherit" href="https://codyhouse.co/gem/horizontal-timeline/"></a>
        </p>

        <div class="cd-h-timeline__container container">
            <div class="cd-h-timeline__dates">
                <div class="cd-h-timeline__line">
                    <ol><b>
                            <?php
                            /*$begin = new DateTime('2021-10-17');
                            $end = new DateTime('2021-11-08');

                            $interval = DateInterval::createFromDateString(
                                '1 day'
                            );
                            $period = new DatePeriod($begin, $interval, $end);

                            foreach ($period as $dt) {
                                echo '<li><a href="#0" data-date="18/10/2021" class="cd-h-timeline__date ' .
                                    (date('now') == $dt
                                        ? 'cd-h-timeline__date--selected">'
                                        : '') .
                                    $dt->format('j M') .
                                    '</a></li>';
                            }*/
                            ?>
                            <li><a href="#0" data-date="17/10/2021" class="cd-h-timeline__date cd-h-timeline__date--selected">17 Oct</a></li>
                            <li><a href="#0" data-date="18/10/2021" class="cd-h-timeline__date">18 Oct</a></li>
                            <li><a href="#0" data-date="19/10/2021" class="cd-h-timeline__date">19 Oct</a></li>
                            <li><a href="#0" data-date="20/10/2021" class="cd-h-timeline__date">20 Oct</a></li>
                            <li><a href="#0" data-date="21/10/2021" class="cd-h-timeline__date">21 Oct</a></li>
                            <li><a href="#0" data-date="22/10/2021" class="cd-h-timeline__date">22 Oct</a></li>
                            <li><a href="#0" data-date="23/10/2021" class="cd-h-timeline__date">23 Oct</a></li>
                            <li><a href="#0" data-date="24/10/2021" class="cd-h-timeline__date">24 Oct</a></li>
                            <li><a href="#0" data-date="25/10/2021" class="cd-h-timeline__date">25 Oct</a></li>
                            <li><a href="#0" data-date="26/10/2021" class="cd-h-timeline__date">26 Oct</a></li>
                            <li><a href="#0" data-date="27/10/2021" class="cd-h-timeline__date">27 Oct</a></li>
                            <li><a href="#0" data-date="28/10/2021" class="cd-h-timeline__date">28 Oct</a></li>
                            <li><a href="#0" data-date="29/10/2021" class="cd-h-timeline__date">29 Oct</a></li>
                            <li><a href="#0" data-date="30/10/2021" class="cd-h-timeline__date">30 Oct</a></li>
                            <li><a href="#0" data-date="31/10/2021" class="cd-h-timeline__date">31 Oct</a></li>
                            <li><a href="#0" data-date="01/11/2021" class="cd-h-timeline__date">01 Nov</a></li>
                            <li><a href="#0" data-date="02/11/2021" class="cd-h-timeline__date">02 Nov</a></li>
                            <li><a href="#0" data-date="03/11/2021" class="cd-h-timeline__date">03 Nov</a></li>
                            <li><a href="#0" data-date="04/11/2021" class="cd-h-timeline__date">04 Nov</a></li>
                            <li><a href="#0" data-date="05/11/2021" class="cd-h-timeline__date">05 Nov</a></li>
                            <li><a href="#0" data-date="06/11/2021" class="cd-h-timeline__date">06 Nov</a></li>
                            <li><a href="#0" data-date="07/11/2021" class="cd-h-timeline__date">07 Nov</a></li>
                            <li><a href="#0" data-date="08/11/2021" class="cd-h-timeline__date">08 Nov</a></li>
                        </b>
                    </ol>
                    <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                </div> <!-- .cd-h-timeline__line -->
            </div> <!-- .cd-h-timeline__dates -->

            <ul>
                <li style="color: black;"><a href="#0" class="previous cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">
                        <h1 style="font-size:35px;margin-top:-5px;margin-left:8px;color: hsl(209, 100%, 50.6%);">></h1>
                    </a>
                </li>
                <li style="color: black;"><a href="#0" class="next cd-h-timeline__navigation cd-h-timeline__navigation--next">
                        <h1 style="font-size:35px;margin-top:-5px;margin-left:8px;color: hsl(209, 100%, 50.6%);">></h1>
                    </a>
                </li>
                <!-- <li><a href="#" class="previous round" class="previous round text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">&#8249;</a></li> -->
                <!-- <li> <a href="#" class="next round" class="next round text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">&#8250;</a></li> -->
            </ul>
        </div> <!-- .cd-h-timeline__container -->

        <div class="cd-h-timeline__events">
            <ol>

                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'evencricket');
                if ($conn == false) {
                    die('Error: Cannot connect');
                }
                $sqldate =
                    'SELECT distinct date FROM schedule ORDER BY date ASC';
                $querydate = mysqli_query($conn, $sqldate);
                while ($rowdate = mysqli_fetch_row($querydate)) {

                    $sqlmatch =
                        "SELECT team_1, team_2, venue, time
                    FROM schedule 
                    WHERE date = '" .
                        $rowdate[0] .
                        "'";
                    $querymatch = mysqli_query($conn, $sqlmatch);
                ?>
                    <li class="cd-h-timeline__event text-component">
                        <div class="cd-h-timeline__event-content container">
                            <h2 class="cd-h-timeline__event-title" style="padding-left: 60px;">Matchday ~</h2>
                            <em class="cd-h-timeline__event-date" style="padding-left: 60px;">
                                <?php echo date(
                                    'F j, Y',
                                    strtotime($rowdate[0])
                                ); ?>
                            </em>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>

                                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <div class="tg-upcomingmatch">


                                            <?php while (
                                                $rowmatch = mysqli_fetch_row(
                                                    $querymatch
                                                )
                                            ) {

                                                $sqlteam1 =
                                                    'SELECT country_name, flag FROM teams WHERE id = ' .
                                                    $rowmatch[0];
                                                $sqlteam2 =
                                                    'SELECT country_name, flag FROM teams WHERE id = ' .
                                                    $rowmatch[1];
                                                $queryteam1 = mysqli_query(
                                                    $conn,
                                                    $sqlteam1
                                                );
                                                $queryteam2 = mysqli_query(
                                                    $conn,
                                                    $sqlteam2
                                                );
                                                $rowteam1 = mysqli_fetch_row(
                                                    $queryteam1
                                                );
                                                $rowteam2 = mysqli_fetch_row(
                                                    $queryteam2
                                                );
                                            ?>
                                                <div class="tg-match my-3">
                                                    <div class="tg-matchdetail row text-center">
                                                        <div class="col-sm-5" style="padding:10px;">
                                                            <div class="tg-teamlogo" style="display: flex; justify-content: center;">
                                                                <img src="<?php echo $rowteam1[1]; ?>" alt="image description" class="img">
                                                            </div>
                                                            <h3 style="font-size: 1.2rem;font-weight:bold">
                                                                <?php echo $rowteam1[0]; ?>
                                                            </h3>
                                                        </div>
                                                        <div class="vs-box col-sm-2">
                                                            <h4 style="margin-top:25px;">vs</h4>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="tg-teamlogo2" style="display: flex; justify-content: center;">
                                                                <img src="<?php echo $rowteam2[1]; ?>" alt="image description" class="img">
                                                            </div>
                                                            <h3 style="font-size: 1.2rem;font-weight:bold;margin-top:30px;">
                                                                <?php echo $rowteam2[0]; ?>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="tg-matchhover text-center" style="height: 100%;padding:15px;font-weight:bold;">
                                                        <div>
                                                            <?php echo 'Date : ' .
                                                                date(
                                                                    'M d, Y ',
                                                                    strtotime(
                                                                        $rowdate[0]
                                                                    )
                                                                ) .
                                                                '<br><br>Time : ' .
                                                                date(
                                                                    'H:i A',
                                                                    strtotime(
                                                                        $rowmatch[3]
                                                                    )
                                                                ) .
                                                                '<br><br> Venue : ' .
                                                                $rowmatch[2]; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ol>
        </div> <!-- .cd-h-timeline__events -->
    </section>

    <style>
        .vs-box h4 {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 12px 0px;
            position: relative;
            text-align: center;
            line-height: 50px;
            background: #ffef2b;
            font-size: 24px;
            color: #002398;
            border-radius: 100px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .vs-box h4 {
            width: 35px;
            height: 35px;
            margin-top: 0;
            line-height: 35px;
            font-size: 18px;
        }
    </style>


    <div id="footer"></div>
    <style>
        .footer {
            font-family: "Poppins", sans-serif;
        }
    </style>



    <script src="fixture_css/util.js"></script> <!-- util functions included in the CodyHouse framework -->
    <script src="fixture_css/swipe-content.js"></script>
    <!-- A Vanilla JavaScript plugin to detect touch interactions -->
    <script src="fixture_css/main.js"></script>




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
        $(document).ready(function() {
            $("#navbar").load("../navbar.html");
            $("#footer").load("../footer.html");
        });
    </script>
</body>

</html>