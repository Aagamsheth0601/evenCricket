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
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
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
		$(document).ready(function () {
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
            width: 70px;
        }

        ul.no-bullets {
            list-style-type: none;
        }

        a {
            text-decoration: none;
        }
    </style>

    <br><br>

    <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
        <p class="text-center margin-top-md timeline margin-bottom-xl">👈 <a class="text--inherit"
                href="https://codyhouse.co/gem/horizontal-timeline/"></a></p>

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
                            <li><a href="#0" data-date="17/10/2021"
                                    class="cd-h-timeline__date cd-h-timeline__date--selected">17 Oct</a></li>
                            <li><a href="#0" data-date="18/10/2021" class="cd-h-timeline__date">18 Oct</a></li>
                            <li><a href="#0" data-date="19/10/2021" class="cd-h-timeline__date">19 Oct</a></li>
                            <li><a href="#0" data-date="20/10/2021" class="cd-h-timeline__date">20 Oct</a></li>
                            <li><a href="#0" data-date="21/10/2021" class="cd-h-timeline__date">21 Oct</a></li>
                            <li><a href="#0" data-date="22/10/2021" class="cd-h-timeline__date">22 Oct</a></li>
                            <!-- <li><a href="#0" data-date="23/10/2021" class="cd-h-timeline__date">23 Oct</a></li>
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
                            <li><a href="#0" data-date="08/11/2021" class="cd-h-timeline__date">08 Nov</a></li> -->
                    </b>
                    </ol>
                    <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                </div> <!-- .cd-h-timeline__line -->
            </div> <!-- .cd-h-timeline__dates -->

            <ul>
                <li><a href="#0"
                        class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">
                        < </a>
                </li>
                <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">></a>
                </li>
            </ul>
        </div> <!-- .cd-h-timeline__container -->

        <div class="cd-h-timeline__events">
            <ol>
                <!-- <li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
                    <div class="cd-h-timeline__event-content container">
                        <h2 class="cd-h-timeline__event-title">Upcoming Match</h2>
                        <em class="cd-h-timeline__event-date">October 17th, 2021</em>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="heading_left">
                                    </div>
                                </div>

                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="tg-upcomingmatch">

                                        <div class="tg-match">
                                            <div class="tg-matchdetail">
                                                <div class="tg-box">
                                                    <strong class="tg-teamlogo">
                                                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8d/Cricket_India_Crest.svg/1200px-Cricket_India_Crest.svg.png"
                                                            alt="image description" class="img">
                                                    </strong>
                                                    <h3>india
                                                    </h3>
                                                </div>
                                                <div class="tg-box">
                                                    <h4>vs</h4>
                                                </div>
                                                <div class="tg-box">
                                                    <strong class="tg-teamlogo2">
                                                        <img src="https://iconape.com/wp-content/png_logo_vector/pakistan-cricket-team-logo.png"
                                                            alt="image description" class="img">
                                                    </strong>
                                                    <h3> pakistan</h3>
                                                </div>
                                            </div>
                                            <div class="tg-matchhover">
                                                <address>Jan16, 2019 15:30 PM Soccer Stadium, Dubai</address>
                                                <div class="tg-btnbox">
                                                    <div class="hs_btn_wrapper match_btn float_left btnnww">
                                                        <ul class="no-bullets">
                                                            <li><a href="#" class="hs_btn_hover btn2">heat of the
                                                                    game</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tg-match">
                                            <div class="tg-matchdetail">
                                                <div class="tg-box">
                                                    <strong class="tg-teamlogo">
                                                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8d/Cricket_India_Crest.svg/1200px-Cricket_India_Crest.svg.png"
                                                            alt="image description" class="img">
                                                    </strong>
                                                    <h3>india
                                                    </h3>
                                                </div>
                                                <div class="tg-box">
                                                    <h4>vs</h4>
                                                </div>
                                                <div class="tg-box">
                                                    <strong class="tg-teamlogo2">
                                                        <img src="https://iconape.com/wp-content/png_logo_vector/pakistan-cricket-team-logo.png"
                                                            alt="image description" class="img">
                                                    </strong>
                                                    <h3> pakistan</h3>
                                                </div>
                                            </div>
                                            <div class="tg-matchhover">
                                                <address>Jan16, 2019 15:30 PM Soccer Stadium, Dubai</address>
                                                <div class="tg-btnbox">
                                                    <div class="hs_btn_wrapper match_btn float_left btnnww">
                                                        <ul class="no-bullets">
                                                            <li><a href="#" class="hs_btn_hover btn2">heat of the
                                                                    game</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
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
                        <h2 class="cd-h-timeline__event-title">Event title here</h2>
                        <em class="cd-h-timeline__event-date">
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
                                            <div class="tg-matchdetail">
                                                <div class="tg-box">
                                                    <strong class="tg-teamlogo">
                                                        <img src="<?php echo $rowteam1[1]; ?>"
                                                            alt="image description" class="img">
                                                    </strong>
                                                    <h3>
                                                        <?php echo $rowteam1[0]; ?>
                                                    </h3>
                                                </div>
                                                <div class="tg-box">
                                                    <h4>vs</h4>
                                                </div>
                                                <div class="tg-box">
                                                    <strong class="tg-teamlogo2">
                                                        <img src="<?php echo $rowteam2[1]; ?>"
                                                            alt="image description" class="img">
                                                    </strong>
                                                    <h3>
                                                        <?php echo $rowteam2[0]; ?>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="tg-matchhover">
                                                <address>
                                                    <?php echo date(
                                                        'Md, Y ',
                                                        strtotime($rowdate[0])
                                                    ) .
                                                        date(
                                                            'H:i A',
                                                            strtotime(
                                                                $rowmatch[3]
                                                            )
                                                        ) .
                                                        '<br>' .
                                                        $rowmatch[2]; ?></address>
                                                <div class="tg-btnbox">
                                                    <div class="hs_btn_wrapper match_btn float_left btnnww">
                                                        <ul class="no-bullets">
                                                            <li><a href="#" class="hs_btn_hover btn2"
                                                                    style="text-decoration:none;">heat of the game</a></li>
                                                        </ul>
                                                    </div>
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
		$(document).ready(function () {
			$("#navbar").load("../navbar.html");
			$("#footer").load("../footer.html");
		});
	</script>
</body>

</html>