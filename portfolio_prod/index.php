<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taufik Hidayat</title>

    <!-- css bootstrap offline versi 4.5.0 -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- css custom lokal -->
    <link rel="stylesheet" href="css/style.css">

    <!-- font online-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Awal Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand page-scroll" href="#home">
                <h1 class="brand">
                    <img src="img/logo.svg" alt="" width="60px">
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item align-self-center">
                        <a class="nav-link page-scroll" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="nav-link page-scroll" href="#progres">Progress</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="btn mx-3 px-3 btn-light page-scroll" href="#portfolio" role="button">Portfolio</a>
                    </li>
                    <li class="nav-item align-self-center">
                        <a class="btn px-3 btn-warning page-scroll" href="#contak" role="button">Contact</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron text-center jumbotron-fluid ">
        <div class="container">
            <img src="img/IMG_20200813_171935_1_-removebg-preview.png"><br><br>
            <h2>
                Taufik Hidayat
            </h2>
        </div>
    </div>
    <!-- akhir jumbotron -->

    <!-- awal panel -->
    <section class="panel">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 control-panel">
                    <div class="row">
                        <div class="col-lg text-center">
                            <img src="img/dribbble.svg" alt="" width="50">
                            <br><br>
                            <h5>UI/UX</h5>
                        </div>
                        <div class="col-lg text-center">
                            <img src="img/wordpress.svg" alt="" width="50">
                            <br><br>
                            <h5>Wordpress</h5>
                        </div>
                        <div class="col-lg text-center">
                            <img src="img/www.svg" alt="" width="50">
                            <br><br>
                            <h5>Web Devlopment</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir panel -->

    <!-- Awal about -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h1 class="mb-4">
                        <b>About</b>
                        <hr>
                    </h1>
                    <p class="mb-4">
                        I am a junior developer from Indonesia, I am constantly looking for opportunities to develop
                        myself professionally in that field. I am often described as a fun person and have clear
                        motivation to become a professional developer, with an aesthetic sense to complement his skills
                        as a professional developer.
                    </p>
                </div>
                <div class="col align-self-center">
                    <img src="img/3081629.jpg" class="img-portfolio" alt="" width="540">
                </div>
            </div>
        </div>
    </section>
    <!-- akhir about -->

    <!-- awal progres -->
    <section class="progres" id="progres">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <b>Progress</b>
                        <hr>
                    </h1>
                </div>
                <div class="col-md-12">
                    <p>Web Design</p>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>UI</p>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>UX</p>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir progres -->

    <!-- awal portfolio -->
    <section class="portfolio mt-5 py-5" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <img src="img/3081783.jpg" class="img-portfolio" alt="" width="540">
                </div>
                <div class="col align-self-center">
                    <h1 class="content-portfolio">
                        <b>Portfolio</b>
                    </h1>
                    <hr>
                    <ul>
                        <li>
                            <h4>UI/UX</h4>
                            <a href="https://dribbble.com/hidytt_taufik" target="_blank">
                                <button class="btn-warning portfolio-info">
                                    <img src="img/dribbble.svg" alt="" width="20px">
                                    View
                                </button>
                            </a>
                        </li>
                        <br><br>
                        <li>
                            <h4>Landing Page</h4>
                            <a href="https://landingpagewebone.000webhostapp.com/" target="_blank">
                                <button class="btn-warning portfolio-info">
                                    <img src="img/speed.svg" alt="" width="20px">
                                    View
                                </button>
                            </a>
                            <a href="https://companyprofile1.000webhostapp.com/" target="_blank">
                                <button class="btn-warning portfolio-info">
                                    <img src="img/speed.svg" alt="" width="20px">
                                    View
                                </button>
                            </a>
                        </li>
                        <br><br>
                        <li>
                            <h4>Wordpress</h4>
                            <a href="http://hanastore.epizy.com/" target="_blank">
                                <button class="btn-warning portfolio-info">
                                    <img src="img/wordpress.svg" alt="" width="20px">
                                    View
                                </button>
                            </a>
                        </li>
                        <br><br>
                        <li>
                            <h4>Web Development</h4>
                            <a href="http://hanatour.masuk.id/" target="_blank">
                                <button class="btn-warning portfolio-info">
                                    <img src="img/www.svg" alt="" width="20px">
                                    View
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir portfolio -->

    <!-- awal Contact -->
    <section class="contak mt-5 py-5" id="contak">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h1 class="mb-4">
                        <b>Contact</b>
                        <hr>
                    </h1>
                    <p class="pr-5">
                        <a href="mailto:hidytt.taufik@gmail.com" target="_blank">
                            <img class="logo" src="img/mail.svg" alt="" width="50"><br><br>
                            <button class="btn-warning portfolio-info" style="width: 150px;">
                                Contact Me
                            </button>
                        </a>
                        <br><br><br>
                        <a href="https://instagram.com/taufikhidytt_" target="_blank">
                            <img class="logo" src="img/instagram.svg" alt="" width="50"><br><br>
                            <button class="btn-warning portfolio-info" style="width: 150px;">
                                See Me
                            </button>
                        </a>
                        <br><br><br>
                        <a href="https://www.google.co.id/maps/place/Citra+Raya+Tangerang/@-6.2407975,106.509742,14.9z/data=!4m12!1m6!3m5!1s0x2e4207a8eac51eb7:0x2c3ce99b1460f8c0!2scitra+raya+cikupa!8m2!3d-6.2347753!4d106.5201084!3m4!1s0x2e42074dee737277:0xe75db3c17d6741b7!8m2!3d-6.2309843!4d106.5222198" target="_blank">
                            <img class="logo" src="img/map-pointer.svg" alt="" width="50"><br><br>
                            <button class="btn-warning portfolio-info" style="width: 150px;">
                                My Location
                            </button>
                        </a>
                    </p>
                </div>
                <div class="col align-self-center">
                    <img src="img/3646134.jpg" class="img-portfolio" alt="" width="540">
                </div>
            </div>
        </div>
    </section>
    <!-- akhir contak -->

    <!-- awal footer -->
    <section class="footer py-4 text-center bg-dark">
        <p class="my-2 text-light">
            Copyright @ 2020 Portfolio <a href="https://instagram.com/taufikhidytt_" target="_blank">Taufik Hidayat</a>
            . | Build
            Tangerang
        </p>
    </section>
    <!-- akhir footer -->

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>