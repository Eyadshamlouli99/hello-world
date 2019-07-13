<?php
session_start();

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>newsPage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

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

            <a class="navbar-brand" href="homepage.php"><img src="../pic/logo-exchangerates5.png" alt="exchanger" width="45" height="45"> <span id="textlogo">Currency</span><span id="textlogo2">Converter</span></a>
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
                    <a class="nav-link active" href="blog.php" style="color:#ffc201;">Blog</a>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Blog post title</h1>
                    <p>Posted by <span class=""></span> <a class="by" href="Profile.php" style="color:#ffc201" >Lorem</a> on <span class=""></span> 20 sep 2018 10:00 am</p>
                </div>
            </div>
        </div>


        <!-- /.row -->

        <div class="row">
            <div class="col-sm-8">

                <!-- Image -->

                <img class="img-responsive" src="../pic/blog3.jpg" alt="" style="height: 400px;width:700px;">



                <p class="lead">Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam erat volut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
                <p>Vivamus risus ex, varius et libero quis, placerat rhoncus mi. Aenean sit amet aliquam nibh. Aliquam tortor est, consequat vitae libero at, vehicula mattis tellus. In condimentum consequat tempor. Nullam at lorem semper, ultricies mi et, mollis turpis. Mauris ut leo ac magna dapibus luctus. Mauris mi nibh, ornare et ipsum vel, finibus molestie nulla. Nunc eleifend leo eget ipsum pellentesque, vel varius ipsum placerat. Mauris tincidunt sapien et efficitur commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec at pellentesque arcu. Pellentesque justo enim, porttitor a arcu non, mollis venenatis felis.</p>
                <p>Praesent viverra pellentesque enim, vitae porta erat elementum quis. Maecenas posuere mattis velit rutrum iaculis. Duis non efficitur nibh. Aliquam laoreet risus a nulla auctor interdum. Ut cursus leo eu justo laoreet porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse vitae nisi dictum, vulputate odio sed, blandit tortor. Fusce eu turpis ut mi porta bibendum nec eu libero.</p>
                <p>Praesent libero sem, feugiat dapibus mattis et, vehicula eu turpis. In vitae consequat leo, quis venenatis justo. Fusce auctor bibendum aliquet. Nullam eu mi lectus. Maecenas risus mauris, feugiat nec ullamcorper non, efficitur et elit. Sed porta tellus ut aliquam auctor. Vivamus id lectus sed tellus cursus sodales sit amet a velit.</p>
                <hr>










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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut dignissim lacus. Quisque in accumsan nisl. Sed ultrices ac leo vel tempus.

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