<?php
session_start();

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>newsPage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Federant" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/news-page.css">


</head>

<body>

    <!--start of nav-->
    <div class="container-fluid nav">

        <nav class="navbar navbar-expand-md fixed-top">

            <a class="navbar-brand" href="homepage.php"><img src="../pic/logo-exchangerates5.png" alt="exchanger"
                    width="45" height="45"> <span id="textlogo">Currency</span><span id="textlogo2">Converter</span></a>
            <ul class="collapse navbar-collapse navbar-nav mr-auto ml-auto align-content-md-between ">
                <li class="nav-item active">
                    <a class="nav-link " href="homepage.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php#convert">Converter </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news-page.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#blog" style="color:#ffc201;">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">Contact Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                </li>
                <?php
                if(!isset($_SESSION['user_name'])) {
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="Sign-in.php">
                            <button type="button" class="btn btn-outline-primary btnav" style="">Sign-in</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sign-up-page.php">
                            <button type="button" class="btn btn-outline-primary btnav" style="">Join us</button>
                        </a>
                    </li>
                    <?php
                }else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Profile.php">
                            <button type="button" class="btn btn-outline-primary btnav" style="">Profile</button>
                        </a>
                    </li>

                    <?php
                }
                ?>

            </ul>

        </nav>
    </div>
    <!--end of nav-->






    <div class="container">





        <!--first row news -->
        <div class="titlediv">Top Articles </div>
        <div class="row  mb-4">
            <div class="col-md-8 image">
                <a href="article-news.php">
                    <img src="../pic/news1.jpg" alt="" style="height: 100%; width: 100%">

                    <h2><span>Sterling overnight volatility jumps to highest since 2017 UK <span class='spacer'>general
                                election</span><span class='spacer'></span></span></h2>

                </a>


            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <a href="article-news.php">
                            <img src="../pic/news2.jpg" alt="test" class="img-responsive"
                                style="height: 100%; width: 100%">

                            <div class="carousel-caption">
                                <span class="text">Dollar falls as Fed officials ring note of caution, pound
                                    bounces</span>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="article-news.php">
                            <img src="../pic/news3.jpg" alt="test" class="img-responsive"
                                style="height: 100%; width: 100%">

                            <div class="carousel-caption">
                                <span class="text">Bitcoin Prices Again Below $8K, But Traders Forecast Fresh
                                    Upside</span>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </div>


        <!--sec row news -->

        <div class="row mt-15">
            <div class="col-md-4">
                <a href="article-news1.php">
                    <img src="../pic/crypto-news-4-600x450.jpg" alt="test" class="img-responsive"
                        style="height: 100%; width: 100%">

                    <div class="carousel-caption">
                        <span class="text">Russians Bisiops Condems Cryptocurrecy (this will be opened from DB)</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="article-news.php">
                    <img src="../pic/crypto-news-5-600x450.jpg" alt="test" class="img-responsive"
                        style="height: 100%; width: 100%">

                    <div class="carousel-caption">
                        <span class="text">Bitcoin Prices Again Below $8K, But Traders Forecast Fresh Upside</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="article-news.php">
                    <img src="../pic/crypto-news-2-600x450.jpg" alt="test" class="img-responsive"
                        style="height: 100%; width: 100%">

                    <div class="carousel-caption">
                        <span class="text">Bitcoin Prices Again Below $8K, But Traders Forecast Fresh Upside</span>
                    </div>
                </a>
            </div>


        </div>


        <!--row for latest news  -->
        <div class="titlediv">The newest Articles </div>
        <div class="row">

            <div class="col-md-4">

                <div class="card" style="">
                    <a href="article-news.php">
                        <img class="card-img-top" src="../pic/crypto-news-2-600x450.jpg" alt="img"
                            style="width: 100% ;height: 231px">
                        <div class="card-body">
                            <p class="card-text"><span class="title">Lorem ipsum dolor sit amet,</span> <br> consectetur
                                adipiscing elit. Donec sit amet ex placerat, blandit sapien in, egestas eros. Sed
                                lobortis sollicitudin luctus. Pellentesque et iaculis metus. Suspendisse eget metus
                                dignissim, convallis mauris vitae, lobortis lorem. Nunc viverra, dui ac lacinia varius,
                                magna magna luctus ligula, et dapibus ssssssssss s s s s s s s s s s s s s s</p>
                        </div>
                    </a>
                </div>


            </div>
            <div class="col-md-4">

                <div class="card" style="">
                    <a href="article-news.php">
                        <img class="card-img-top" src="../pic/blog2.jpg" alt="img" style="width: 100% ;height: 231px">
                        <div class="card-body">
                            <p class="card-text"><span class="title">Lorem ipsum dolor </span> <br>sit amet, consectetur
                                adipiscing elit. Donec sit amet ex placerat, blandit sapien in, egestas eros. Sed
                                lobortis sollicitudin luctus. Pellentesque et iaculis metus. Suspendisse eget metus
                                dignissim, convallis mauris vitae, lobortis lorem. Nunc viverra, dui ac lacinia varius,
                                magna magna luctus ligula, et dapibus ssssssssss s s s s </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">

                <div class="card" style="">
                    <a href="article-news.php">
                        <img class="card-img-top" src="../pic/blog3.jpg" alt="img" style="width: 100% ;height: 231px">
                        <div class="card-body">
                            <p class="card-text"><span class="title">Lorem ipsum dolor</span> <br> sit amet, consectetur
                                adipiscing elit. Donec sit amet ex placerat, blandit sapien in, egestas eros. Sed
                                lobortis sollicitudin luctus. Pellentesque et iaculis metus. Suspendisse eget metus
                                dignissim, convallis mauris vitae, lobortis lorem. Nunc viverra, dui ac lacinia varius,
                                magna magna luctus ligula, et dapibus ssssssssss s s s s </p>
                        </div>
                    </a>
                </div>



            </div>










        </div>








    </div>

    <!---footer-->

    <footer style="" id="about-us">

        <div class="footer-top ">
            <div class="container-fluid ">
                <div class="row ">
                    <div class="col-md-3 footer-about   mt-2">

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut dignissim lacus.
                            Quisque in accumsan nisl. Sed ultrices ac leo vel tempus.

                        </p>

                    </div>
                    <div class="col-md-4 offset-md-1 footer-contact   mt-2">
                        <h3>Contact</h3>
                        <p><i class="fas fa-map-marker-alt"></i> Plaestine</p>
                        <p><i class="fas fa-phone"></i> Phone: (889) 666 888 999</p>
                        <p><i class="fas fa-envelope"></i> Email: <a href="#">***@####.com</a></p>

                    </div>
                    <div class="col-md-4 footer-links   mt-2">
                        <div class="row">
                            <div class="col">
                                <h3>Links</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><a class="scroll-link" href="homepage.php">Home</a></p>
                                <p><a href="homepage.php#convert">convertor</a></p>

                                <p><a href="news-page.php">news</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a href="blog.php">articals</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        &copy; made by <a href="#">currencyconvertor</a>
                        <br>
                        images and headlines provided in this site are not ours
                    </div>
                    <div class="col-md-6 footer-social">
                        <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.goolgle.com"><i class="fab fa-google-plus-g"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.pinterest.com"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>










</body>

</html>