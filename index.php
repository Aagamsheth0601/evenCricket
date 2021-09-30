<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Even Cricket</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/ec1-removebg-preview.png" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/news.css">
    <link rel="stylesheet" href="assets/css/faq.css">
    <link rel="stylesheet" href="assets/css/venues.css">
    <link rel="stylesheet" href="assets/css/points.css">

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
               <img src="./assets/img/361.png" alt="loader">
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
                            <img src="assets/img/ec1-removebg-preview.png" />
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
                                        <li class="nav-item"><a href="teamRanking.html">Team Ranking</a></li>
                                        <li class="nav-item"><a href="playerRanking.html">Player Ranking</a></li>
                                        <li class="nav-item"><a href="./player comparison/playercomparison.php">Player Comparison</a></li>
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
<style>
    .carousel-inner {
    padding: 0;
    transition: transform 2s ease;
    overflow: hidden;
    }

    .news-text{
        z-index: 5;
    }

    .carousel-inner:hover img{
    transform: scale(1.01);
    }

    .carousel-inner:hover h5{
    text-decoration: underline;
    }

    .news-text {
    background-color: #3763eb;
    display: flex;
    align-items: center;
    }
    .news-text p,
    .news-text h5 {
    color: white;
    padding: 5px;
    }
</style>


    <section>
        <div class="row">
            <!-- ===================== Left Side Start ========================== -->
            <div class="col-xl-9 col-lg-8" style="border-right:1px solid rgb(128, 131, 240);">
                <!-- ===================== News Start ========================== -->
                <section id="news">
                    <!-- <div class="section-title text-center mb-55">
                        <span class="wow fadeInDown" data-wow-delay=".2s" style="font-size: 40px;">News</span>
                    </div> -->
                    <div class="container">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="height:400px;">
                                    <a href="https://indianexpress.com/article/sports/cricket/virat-kohli-confirms-he-is-leaving-as-t20-captain-mantle-set-to-go-to-rohit-sharma-7513512/">
                                        <div class="row">
                                            <div class="col-lg-8 news-image">
                                                <img class="d-block w-100" style="height:25em;" src="https://images.indianexpress.com/2021/09/Rohit-Sharma-and-Virat-Kohli.jpg" alt="First slide">
                                            </div>
                                            <div class="col-lg-4 news-text">
                                                <div>
                                                    <h5>Virat Kohli confirms he is leaving as T20 captain, mantle set to go to Rohit Sharma</h5>
                                                    <p style="color:beige;">Virat Kohli’s statement mentioned Rohit Sharma as “an essential part of the leadership group”, all but anointing the latter as his successor in the shortest format.</p>
                                                    <p style="color: white;">17 Sept 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item" style="height:400px;">
                                    <a href="https://timesofindia.indiatimes.com/sports/cricket/ipl/top-stories/ipl-2021-dry-run-in-the-desert-ahead-of-the-t20-world-cup/articleshow/86334742.cms">
                                        <div class="row">
                                            <div class="col-lg-8 news-image">
                                                <img class="d-block w-100" style="height:25em;" src="https://c4.wallpaperflare.com/wallpaper/857/547/802/sports-cricket-wallpaper-thumb.jpg" alt="First slide">
                                            </div>
                                            <div class="col-lg-4 news-text">
                                                <div>
                                                    <h5>Hello There</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quos temporibus obcaecati molestiae veritatis? Facere placeat accusantium, qui nisi, tempora fuga voluptatibus quia nesciunt quam officiis sequi quidem explicabo nobis?</p>
                                                    <p style="color: white;">17 Sept 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item" style="height:400px;">
                                    <a href="https://sports.ndtv.com/ipl-2021/ipl-2021-david-hussey-feels-two-kkr-cricketers-are-about-to-shock-the-world-2545738">
                                        <div class="row">
                                            <div class="col-lg-8 news-image">
                                                <img class="d-block w-100" style="height:25em;" src="https://wallpaperaccess.com/full/3818798.jpg" alt="First slide">
                                            </div>
                                            <div class="col-lg-4 news-text">
                                                <div>
                                                    <h5>Hello There</h5>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quos temporibus obcaecati molestiae veritatis? Facere placeat accusantium, qui nisi, tempora fuga voluptatibus quia nesciunt quam officiis sequi quidem explicabo nobis?</p>
                                                    <p style="color: white;">17 Sept 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="z-index: 100;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="z-index: 100;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <br><br><br>
                </section>
                <!-- ===================== News End ========================== -->

  
                <!-- ===================== Venue Start ========================== 
                <style>
                    .p-4{
                        height: 450px;
                        width: 320px;
                        margin: auto;
                        box-shadow: 5px 1px 4px 4px #888888;
                    }

                    .p-6:hover h1,.p-6:hover h2,.p-6:hover p {
                        cursor: pointer;
                        color: red;
                    }
                </style>
                <section id='venue'>
                    <div class="section-title text-center mb-55">
                        <span class="wow fadeInDown" data-wow-delay=".2s" style="font-size: 40px;">Venues</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="p-4">
                                <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/74f5adc9-bb13-4ab5-954d-751cafd0753a/Dubai-International-Stadium.jpeg?width=576&height=576" alt="blog" style="height: 300px;">
                                    -->
                                    <!-- <div class="location" style = "width: 70%; margin: auto;">
                                        <div class="location__container" style="display: -ms-flexbox;display: flex;">
                                                    
                                                    
                                            <div class="location__background" style="background-color: blue;height: 3rem;width: 3.5rem;transform: skew(-10deg);display: inline-block;">
                                                <i class="fa fa-map-marker" style="color: white;font-size: 26px;margin-top: 10px;margin-left: 7px;"></i>
                                            </div>

                                            <div class="location__text-container" style="transform: skew(-10deg);background-color: #ff3054;padding: 0 .5rem;position: relative;
                                                        font-family: CWCItalic,Arial,sans-serif;font-weight: 600;-webkit-font-smoothing: antialiased;">
                                                <span class="location__text" style="color: #fff;font-size: 1.2rem;font-weight: 700;z-index: 10;
                                                            text-transform: uppercase;left: 4.5rem;line-height: 2rem;margin-top: 7px;">DUBAI</span>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1"></h2>
                                        <h1 class="title-font text-lg font-medium mb-3 text-center">Dubai International Stadium</h1>
                                        <p class="leading-relaxed mb-3"></p>
                                        <div class="flex items-center flex-wrap ">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- ========================= Spacer ========================= -->
                            <!-- <div style="height:25px;"></div> -->
                            <!-- ========================= Spacer ========================= -->
                        <!-- </div>
                        
                        <div class="col-sm-6">
                            <div class="p-4">
                                <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/136021b0-3393-4b1e-a838-bd6c92e3c9df/Sharjah-Cricket-Stadium-.jpeg?width=576&height=576" alt="blog" style="height: 300px;"> -->
                                    
                                    <!-- <div class="location">
                                        <div class="location__container" style="display: -ms-flexbox;display: flex;position: relative;margin-left: 70px;">
                                                    
                                                    
                                            <div class="location__background" style="background-color: blue;height: 3rem;width: 3.5rem;transform: skew(-10deg);display: inline-block;">
                                                <i class="fa fa-map-marker" style="color: white;font-size: 26px;margin-top: 10px;margin-left: 7px;"></i>
                                            </div>
                                            
                                            <div class="location__text-container" style="transform: skew(-10deg);background-color: #ff3054;padding: 0 .5rem;position: relative;
                                                    font-family: CWCItalic,Arial,sans-serif;font-weight: 600;-webkit-font-smoothing: antialiased;">
                                                <span class="location__text" style="color: #fff;font-size: 1.2rem;font-weight: 700;z-index: 10;
                                                        text-transform: uppercase;left: 4.5rem;line-height: 2rem;margin-top: 7px;">SHARJAH</span>
                                            </div>
                                        </div>
                                    </div> -->
<!-- 
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1"></h2>
                                        <h1 class="title-font text-lg font-medium mb-3 text-center">Sharjah Stadium</h1>
                                        <p class="leading-relaxed mb-3"></p>
                                            
                                        <div class="flex items-center flex-wrap">
                                            
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- ========================= Spacer ========================= -->
                            <!-- <div style="height:25px;"></div> -->
                            <!-- ========================= Spacer ========================= -->
                        <!-- </div>

                        <div class="col-sm-6">
                            <div class="p-4">
                                <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/f4b35fe0-732b-472f-977b-6b2a32f697f5/OCA-building.jpeg?width=576&height=576" alt="blog" style="height: 300px;"> -->
                                    
                                    <!-- <div class="location">
                                        <div class="location__container" style="display: -ms-flexbox;display: flex;position: relative;margin-left: 16%;">
                                                    
                                                    
                                            <div class="location__background" style="background-color: blue;height: 3rem;width: 3.5rem;transform: skew(-10deg);display: inline-block;">
                                                <i class="fa fa-map-marker" style="color: white;font-size: 26px;margin-top: 10px;margin-left: 5px;"></i>
                                            </div>
                                            
                                            <div class="location__text-container" style="transform: skew(-10deg);background-color: #ff3054;padding: 0 .5rem;position: relative;
                                                    font-family: CWCItalic,Arial,sans-serif;font-weight: 600;-webkit-font-smoothing: antialiased;">
                                                <span class="location__text" style="color: #fff;font-size: 1.2rem;font-weight: 700;z-index: 10;
                                                        text-transform: uppercase;left: 4.5rem;line-height: 2rem;margin-top: 7px;">MUSCAT, OMAN</span>
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                    <!-- <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1"></h2>
                                        <h1 class="title-font text-lg font-medium mb-3 text-center">Al Amerat Cricket Stadium</h1>
                                        <p class="leading-relaxed mb-3"></p>
                                            
                                        <div class="flex items-center flex-wrap">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- ========================= Spacer ========================= -->
                            <!-- <div style="height:25px;"></div> -->
                            <!-- ========================= Spacer ========================= -->
                        <!-- </div>

                        <div class="col-sm-6">
                            <div class="p-4">
                                <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2019/10/18/07b27157-54f9-4542-aece-716b0ad6a97e/IMG_20191018_173053__01.jpg?width=576&height=576" alt="blog" style="height: 300px;">
                                             -->
                                    <!-- <div class="location">
                                        <div class="location__container" style="display: -ms-flexbox;display: flex;position: relative;margin-left: 70px;">
                                                    
                                                    
                                            <div class="location__background" style="background-color: blue;height: 3rem;width: 3.5rem;transform: skew(-10deg);display: inline-block;">
                                                <i class="fa fa-map-marker" style="color: white;font-size: 26px;margin-top: 10px;margin-left: 5px;"></i>
                                            </div>
                                                    
                                            <div class="location__text-container" style="transform: skew(-10deg);background-color: #ff3054;padding: 0 .5rem;position: relative;
                                                    font-family: CWCItalic,Arial,sans-serif;font-weight: 600;-webkit-font-smoothing: antialiased;">
                                                <span class="location__text" style="color: #fff;font-size: 1.2rem;font-weight: 700;z-index: 10;
                                                        text-transform: uppercase;left: 4.5rem;line-height: 2rem;margin-top: 7px;">ABU DHABI</span>
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                    <!-- <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1"></h2>
                                        <h1 class="title-font text-lg font-medium mb-3 text-center">Sheikh Zayed Stadium</h1>
                                        <p class="leading-relaxed mb-3"></p>
                                            
                                        <div class="flex items-center flex-wrap ">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- ========================= Spacer ========================= -->
                            <!-- <div style="height:25px;"></div> -->
                            <!-- ========================= Spacer ========================= -->
                        <!-- </div>
                        
                    </div>
                </section>
                ===================== Venue End ========================== -->




<!-- venues start -->


            <div style="overflow: hidden;">
                <div id="mainCoantiner" style="height: 1550px;">
                    <!--dust particel-->
                    <div class="margin-body">
                    
                    <div style="height: 100px;">
                     
                      <div class="starsec"></div>
                      <div class="starthird"></div>
                      <div class="starfourth"></div>
                      <div class="starfifth"></div>
                   
                    </div>
                    <!--Dust particle end--->
                  
                    <div class="row">
                      <div class="col-sm-12 col-md-12">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                              <div class="title-h1 text-center"><span><span class="light">t20 worldcup 2021 </span> venues</span></div>
                            </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-6 col-md-6 pricing-column-wrapper" style="width: 320px;;margin-left: 100px;">
                           <div class="pricing-column">
                                <div class="pricing-price-row">
                                  <div class="pricing-price-wrapper">
                                    <div class="pricing-price">
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/74f5adc9-bb13-4ab5-954d-751cafd0753a/Dubai-International-Stadium.jpeg?width=576&height=576" alt="blog" style="  border-radius: 50%;height: 220px;width: 220px;">
                                    </div>
                                  </div>
                                </div>
                                <div class="pricing-row-title">
                                  <div class="pricing_row_title">Dubai International Stadium</div>
                                </div>
                                <figure>
                                    The capital of the Emirate with the same name, Dubai is known for its .....
                                </figure>
                                
                                <div class="pricing-footer">
                                  <div class="gem-button-container gem-button-position-center"><a href="https://www.t20worldcup.com/venues/37/dubai-international-stadium/city" target="_blank" class="gem-button gem-green">Read Article</a></div>
                                </div>
                              </div>
                      </div>
                      <div class="col-sm-6 col-md-6 pricing-column-wrapper" style="width: 320px;margin-left: 210px;">
                         <div class="pricing-column">
                                <div class="pricing-price-row">
                                  <div class="pricing-price-wrapper">
                                    <div class="pricing-price">
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/136021b0-3393-4b1e-a838-bd6c92e3c9df/Sharjah-Cricket-Stadium-.jpeg?width=576&height=576" alt="blog" style="  border-radius: 50%;height: 220px;width: 220px;">
                                    </div>
                                  </div>
                                </div>
                                <div class="pricing-row-title">
                                  <div class="pricing_row_title" style="margin-top:10px;padding-bottom: 25px;">Sharjah Stadium</div>
                                </div>
                                <figure>
                                    The United Arab Emirates’ third most populous city, Sharjah is the capital of .....
                                </figure>
                                <div class="pricing-footer">
                                  <div class="gem-button-container gem-button-position-center"><a href="https://www.t20worldcup.com/venues/104/sharjah-stadium/city" target="_blank" class="gem-button gem-purpel">Read Article</a></div>
                                </div>
                              </div>
                      </div>
                      <div class="col-sm-6 col-md-6 pricing-column-wrapper" style="width: 320px;;margin-left: 100px;">
                        <div class="pricing-column">
                                <div class="pricing-price-row">
                                  <div class="pricing-price-wrapper">
                                    <div class="pricing-price">
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/f4b35fe0-732b-472f-977b-6b2a32f697f5/OCA-building.jpeg?width=576&height=576" alt="blog" style="  border-radius: 50%;height: 220px;width: 220px;">
                                    </div>
                                  </div>
                                </div>
                                <div class="pricing-row-title">
                                  <div class="pricing_row_title">Oman Cricket Academy Ground</div>
                                </div>
                                <figure>Late Sultan Qaboos bin Said, the Oman Cricket Ground is the jewel .....</figure>
                                <div class="pricing-footer">
                                  <div class="gem-button-container gem-button-position-center">
                                    <a href="https://www.t20worldcup.com/venues/588/oman-cricket-academy-ground/venue" target="_blank" class="gem-button gem-orange">Read Article</a></div>
                                </div>
                              </div>
                      </div>
                      <div class="col-sm-6 col-md-6 pricing-column-wrapper" style="width: 320px;margin-left: 210px;">
                        <div class="pricing-column">
                                <div class="pricing-price-row">
                                  <div class="pricing-price-wrapper">
                                    <div class="pricing-price">
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2019/10/18/07b27157-54f9-4542-aece-716b0ad6a97e/IMG_20191018_173053__01.jpg?width=576&height=576" alt="blog" style="  border-radius: 50%;height: 220px;width: 220px;">
                                    </div>
                                  </div>
                                </div>
                                <div class="pricing-row-title">
                                  <div class="pricing_row_title">Sheikh Zayed Stadium</div>
                                </div>
                                <figure>The capital of the United Arab Emirates, Abu Dhabi is the country’s second .....</figure>
                                <div class="pricing-footer">
                                  <div class="gem-button-container gem-button-position-center"><a href="https://www.t20worldcup.com/venues/102/sheikh-zayed-stadium/city" target="_blank" class="gem-button gem-yellow">Read Article</a></div>
                                </div>
                              </div>
                      </div>
                    </div>
                  
                   </div>
                </div>


            </div>
<!-- Venues end -->







<!-- Points table start -->

<div class="section-title text-center mb-55">
    <span class="wow fadeInDown" data-wow-delay=".2s" style="font-size: 40px;margin-top: 80px;">Points Table</span>
</div>

<section class="wrapper" style="margin-top: 50px;background: rgba(0, 0, 0, 0.9);font-family: 'Open Sans', sans-serif;">
    <!-- Row title -->
    <main class="point-row title">
      <ul style="text-align:center;">
        <li>Team</li>
        <li>Matches</li>
        <li>Won</li>
        <li>Lost</li>
        <li>NRR</li>
        <li>Points</li>
      </ul>
    </main>
    <!-- Row 1 - fadeIn -->
    
    <!-- Row 3 -->


    <?php

        $team = "";
        $keyword = "";
        $matches = "";
        $won = "";
        $lost = "";
        $nrr = "";
        $points = "";
        $content = "";
        $flag = "";
        
        $conn = mysqli_connect('localhost', 'root', '', 'evencricket');
        if ($conn == false) {
            die('Error: Cannot connect');
        }
        
            $sql = "SELECT * FROM `points_table` ORDER BY points DESC, nrr  DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                
                    $team = $row["team"];
                    $keyword = $row["keyword"];
                    $matches = $row["matches"];
                    $won = $row["won"];
                    $lost = $row["lost"];
                    $nrr = $row["nrr"];
                    $points = $row["points"];
                    $content = $row["content"];

                    $sql2 = "SELECT * FROM `teams` WHERE country_name = '$team'";
                    $result2 = $conn->query($sql2);
                    if ($result2) {
                        // output data of each row
                            while($row2 = $result2->fetch_assoc()) {
                                $flag = $row2["flag"];
                            }
                    }
                ?>
                    <article class="point-row <?php echo $keyword;?>">
                        <ul style="text-align:center;">
                            <li style="text-align:left;"><a href="#"><img style="hieght:20px;width:30px;display:inline;margin-right:10px;margin-left:2px;" src="<?php echo $flag ?>" alt=""><?php echo $team;?></a></li>
                            <li><?php echo $matches;?></li>
                            <li><?php echo $won;?></li>
                            <li><?php echo $lost;?></li>
                            <li><?php echo $nrr;?></li>
                            <li><?php echo $points;?></li>
                        </ul>
                        <ul class="more-content">
                            <li><?php echo $content;?></li>
                        </ul>
                    </article>
                <?php
                }
            }
    ?>
    
    
  </section>

<!-- Points table end -->








                <!-- ===================== FAQ Start ========================== -->
                <section id="faqsection">
                    <div class="faq">
                        <div class="faq__logo__holder">
                            <div class="faq__logo">
                                <img src="https://bobmatyas.github.io/fm-faq-accordion/images/illustration-woman-online-mobile.svg" alt="woman at a computer" class="faq__logo__image hidden-lg">
                                <img src="https://bobmatyas.github.io/fm-faq-accordion/images/illustration-box-desktop.svg" alt="" class="faq__logo__image visible-lg">
                            </div>
                        </div>
                        
                        <div class="faq__holder">
                            <div class="section-title text-center mb-55">
                                <span class="wow fadeInDown" data-wow-delay=".2s" style="font-size: 40px;">FAQ</span>
                            </div>
                        
                            <details class="faq__detail">
                                <summary  class="faq__summary"><span class="faq__question">How many team members can I invite?</span></summary>
                                <p class="faq__text">You can invite up to 2 additional users on the Free plan. There is no limit on team members for the Premium plan.</p>
                            </details>
                        
                            <details class="faq__detail">
                                <summary  class="faq__summary"><span class="faq__question">What is the maximum file upload size?</span></summary>
                                <p class="faq__text">No more than 2GB. All files in your account must fit your allotted storage space.</p>
                            </details>  
                        
                            <details class="faq__detail">
                                <summary  class="faq__summary"><span class="faq__question">How do I reset my password?</span></summary>
                                <p class="faq__text">Click “Forgot password” from the login page or “Change password” from your profile page.</p>
                                <p class="faq__text">A reset link will be emailed to you.</p>
                            </details>  
                            
                            <details class="faq__detail">
                                <summary  class="faq__summary"><span class="faq__question">Can I cancel my subscription?</span></summary>
                                <p class="faq__text">Yes! Send us a message and we’ll process your request no questions asked.</p>
                            </details> 
                            
                            <details class="faq__detail">
                                <summary  class="faq__summary"><span class="faq__question">Do you provide additional support?</span></summary>
                                <p class="faq__text">Chat and email support is available 24/7. Phone lines are open during normal business hours.</p>
                            </details>   
                        </div>
                    </div>
                </section>
                <!-- ===================== FAQ End ========================== -->
            </div>
            <!-- ===================== Left Side End ========================== -->

            <!-- ===================== Right Side Start ========================== -->
            <div class="col-xl-3 col-lg-4">
                <iframe src="https://widget.crictimes.org/" style="width:100%;min-height: 450px;" frameborder="0" scrolling="yes"></iframe>
                <br>
                <div class="container">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr">Hello Everyone! We are a page that keeps you updated with the latest news from the upcoming
                            <a href="https://twitter.com/hashtag/T20WorldCup?src=hash&amp;ref_src=twsrc%5Etfw">#T20WorldCup</a>. We are
                            young cricket enthusiasts with a blazing desire for the game. We are delighted to present our page in front of
                            you all. <br>Do follow and spread the word.<a
                                href="https://twitter.com/hashtag/CricketTwitter?src=hash&amp;ref_src=twsrc%5Etfw">#CricketTwitter</a> <a
                                href="https://t.co/QQiybgr3nW">pic.twitter.com/QQiybgr3nW</a></p>&mdash; Even Cricket (@CricketEven) <a
                            href="https://twitter.com/CricketEven/status/1438431907121823745?ref_src=twsrc%5Etfw">September 16, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr">BREAKING NEWS: <br>Virat Kohli to step down as the T20I captain of the Indian Cricket Team
                            after the <a href="https://twitter.com/hashtag/T20WorldCup?src=hash&amp;ref_src=twsrc%5Etfw">#T20WorldCup</a>.
                            Most probably Rohit Sharma to be named as the captain after the <a
                                href="https://twitter.com/hashtag/T20WorldCup?src=hash&amp;ref_src=twsrc%5Etfw">#T20WorldCup</a>. <a
                                href="https://twitter.com/hashtag/ViratKohli?src=hash&amp;ref_src=twsrc%5Etfw">#ViratKohli</a> <a
                                href="https://twitter.com/hashtag/Cricket?src=hash&amp;ref_src=twsrc%5Etfw">#Cricket</a> <a
                                href="https://twitter.com/hashtag/RohitSharma?src=hash&amp;ref_src=twsrc%5Etfw">#RohitSharma</a> <a
                                href="https://twitter.com/hashtag/BCCI?src=hash&amp;ref_src=twsrc%5Etfw">#BCCI</a> <a
                                href="https://twitter.com/hashtag/CricketTwitter?src=hash&amp;ref_src=twsrc%5Etfw">#CricketTwitter</a> <a
                                href="https://t.co/15auPKdKH1">pic.twitter.com/15auPKdKH1</a></p>&mdash; Even Cricket (@CricketEven) <a
                            href="https://twitter.com/CricketEven/status/1438496050453508103?ref_src=twsrc%5Etfw">September 16, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
            <!-- ===================== Right Side End ========================== -->
    </section>
    <!-- ========================= Main end ========================= -->

    <!-- ========================= Spacer ========================= -->
    <div style="height:150px;"></div>
    <!-- ========================= Spacer ========================= -->

    <!-- ========================= subscribe-section start ========================= -->
    <section class=" subscribe-section pt-70 pb-70 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title mb-30">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s">Subscribe</span>
                        <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s">
                            Subscribe Our Newsletter
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <form action="#" class="subscribe-form wow fadeInRight" data-wow-delay=".4s">
                        <input type="text" name="subs-email" id="subs-email" placeholder="Your Email" />
                        <button type="submit">
                            <i class="lni lni-telegram-original"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= subscribe-section end ========================= -->

    <!-- ========================= footer start ========================= -->
    <footer class="footer pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                        <a href="index.html" class="logo mb-30"><img src="assets/img/ec1-removebg-preview.png" /></a>
                        <p class="mb-30 footer-desc">
                            We Crafted an awesome desig library that is robust and intuitive
                            to use. No matter you're building a business presentation
                            websit.
                        </p>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                        <h4>Quick Link</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">About Us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Service</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                        <h4>Service</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="javascript:void(0)">Marketing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Branding</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Web Design</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Graphics Design</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                        <h4>Contact</h4>
                        <ul class="footer-contact">
                            <li>
                                <p>+00983467367234</p>
                            </li>
                            <li>
                                <p>yourmail@gmail.com</p>
                            </li>
                            <li>
                                <p>United State Of America *12 Street House</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="footer-social-links">
                            <ul class="d-flex">
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/CricketEven" target="__blank"><i
                                            class="lni lni-twitter-filled"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">

                            <a href="" rel="nofollow">Even Cricket</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.bundle-5.0.0-beta1.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        // Master DOManipulator v2 ------------------------------------------------------------
        const items = document.querySelectorAll('.item'),
            controls = document.querySelectorAll('.control'),
            headerItems = document.querySelectorAll('.item-header'),
            descriptionItems = document.querySelectorAll('.item-description'),
            activeDelay = .76,
            interval = 5000;

        let current = 0;

        const slider = {
            init: () => {
                controls.forEach(control => control.addEventListener('click', (e) => { slider.clickedControl(e) }));
                controls[current].classList.add('active');
                items[current].classList.add('active');
            },
            nextSlide: () => { // Increment current slide and add active class
                slider.reset();
                if (current === items.length - 1) current = -1; // Check if current slide is last in array
                current++;
                controls[current].classList.add('active');
                items[current].classList.add('active');
                slider.transitionDelay(headerItems);
                slider.transitionDelay(descriptionItems);
            },
            clickedControl: (e) => { // Add active class to clicked control and corresponding slide
                slider.reset();
                clearInterval(intervalF);

                const control = e.target,
                    dataIndex = Number(control.dataset.index);

                control.classList.add('active');
                items.forEach((item, index) => {
                    if (index === dataIndex) { // Add active class to corresponding slide
                        item.classList.add('active');
                    }
                })
                current = dataIndex; // Update current slide
                slider.transitionDelay(headerItems);
                slider.transitionDelay(descriptionItems);
                intervalF = setInterval(slider.nextSlide, interval); // Fire that bad boi back up
            },
            reset: () => { // Remove active classes
                items.forEach(item => item.classList.remove('active'));
                controls.forEach(control => control.classList.remove('active'));
            },
            transitionDelay: (items) => { // Set incrementing css transition-delay for .item-header & .item-description, .vertical-part, b elements
                let seconds;

                items.forEach(item => {
                    const children = item.childNodes; // .vertical-part(s)
                    let count = 1,
                        delay;

                    item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;

                    children.forEach(child => { // iterate through .vertical-part(s) and style b element
                        if (child.classList) {
                            item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
                            child.firstElementChild.style.transitionDelay = `${delay}s`; // b element
                            count++;
                        }
                    })
                })
            },
        }

        let intervalF = setInterval(slider.nextSlide, interval);
        slider.init();
    </script>
</body>

</html>