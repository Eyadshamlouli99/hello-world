<?php
session_start();

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.ddslick.min.js"></script>
    <script src="../js/plotly-latest.min.js"></script>


    <script src="../js/home.js"> </script>
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/homepage.css">




</head>

<body class="body">
    <div class="container-fluid nav">

        <nav class="navbar navbar-expand-md fixed-top">

            <a class="navbar-brand" href="homepage.php"><img src="../pic/logo-exchangerates5.png" alt="exchanger" width="45" height="45"> <span id="textlogo">Currency</span><span id="textlogo2">Converter</span></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="collapse navbar-collapse navbar-nav mr-auto ml-auto align-content-md-between   navbar-responsive-collapse">
                <li class="nav-item active">
                    <a class="nav-link active" href="homepage.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#convert">Converter </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us">Contact Us </a>
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
        <!--end of nav--->
    </div>
    <div class="container">
        <!--converting row  -->
        <div class="block  " id="converting" style=" background:transparent url('../pic/bluebackgrounf.jpg')">
            <!--row1-->
            <div class="row justify-content-center align-items-center" style=" ">

                <form class="form-inline first">
                    <div class="col-md-6">
                        <!--amount-->
                        <div class="d-flex flex-column" reuslt>
                            <label class="converterform-label" for="amount">Amount</label>
                            <input type="text" class="1 form-control" id="amount" name="Amount">
                        </div>




                    </div>
                    <!--from-->
                    <div class="col-md-3 ">
                        <div class="d-flex flex-column col-xs-2">
                            <label class="converterform-label" for="from">From</label>
                            <select title="from" id="from">

                                <option value="PNS"> PNS</option>
                                <option value="JOD">JOD</option>
                                <option value="USD">USD</option>
                                <option value="Yen">Yen</option>
                                <option value="Euro">Euro</option>
                                <option value="Pound">Pound </option>


                            </select>
                        </div>

                    </div>
                    <!--to-->
                    <div class="col-md-3 " id="convert">

                        <div class="d-flex flex-column">
                            <label class="converterform-label" for="to">To</label>
                            <select title="to" class="" id="to">

                                <option value="PNS"> PNS</option>
                                <option value="JOD">JOD</option>
                                <option value="USD">USD</option>
                                <option value="Yen">Yen</option>
                                <option value="Euro">Euro</option>
                                <option value="Pound">Pound </option>
                            </select>
                        </div>
                    </div>
                </form>

                <button id="convert" type="button" class="btn btn-outline-primary" style="" onclick="Currency(); Calculate()">Convert</button>


            </div>



            <!--row 2-->
            <div class="row justify-content-center ">
                <!--result-->
                <form class="form-inline second">
                    <div class="col-md-6 ">
                        <div class="d-flex flex-row">
                            <label class="converterform-label res" for="reuslt">Result</label>
                            <input type="text" class="form-control 1 res" id="reuslt" name="reuslt" style="">
                        </div>

                    </div>
                </form>

            </div>



        </div>


        <!--table and graph row  -->
        <div class="block" id="tabNgraph">
            <!--tabNgraph row  -->
            <div class="row">
                <!--table column -->
                <div class="col-md-6">

                    <table class="table ">
                        <thead class="data1">
                            <tr>
                                <th></th>
                                <th class="blue">Last 30 days</th>
                                <th class="blue"> Last 90 days</th>
                            </tr>
                        </thead>
                        <tbody class="data">
                            <tr>
                                <td class="yellow">
                                    <div class="tooltip*">High </div>
                                </td>

                                <td>0.20</td>
                                <td>0.14</td>
                            </tr>
                            <tr>
                                <td class="yellow">
                                    <div class="tooltip8"> Low
                                        <span class="tooltiptext">Lorem ipsum dolor sit amet</span>
                                    </div>
                                </td>

                                <td>0.15</td>
                                <td>0.16</td>
                            </tr>
                            <tr>
                                <td class="yellow">
                                    <div class="tooltip*">Average </div>
                                </td>

                                <td>0.22</td>
                                <td>0.24093</td>
                            </tr>
                            <tr>
                                <td class="yellow">
                                    <div class="tooltip*">Volatility </div>
                                </td>


                                <td>0.85093</td>
                                <td>0.89093</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <!--graoh column -->
                <div class="col-md-6">
                    <div id="f"></div>
                    <div id="myDiv" style="width: 100%;height: 100%">
                        <!-- Plotly chart will be drawn inside this DIV -->
                    </div>
                    <script>
                        var trace1 = {
  x: ['hight', 'low','average','Volatility'], 
  y: [20, 14,15,16],
  type: 'bar',
  name: 'last 30 days',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7
  }
};

var trace2 = {
  x: ['hight', 'low','average','Volatility'],
  y: [19, 14, 22, 14],
  type: 'bar',
  name: 'last 90 days',
  marker: {
    color: 'rgb(204,204,204)',
    opacity: 0.5
  }
};

var data = [trace1, trace2];

var layout = {
  title: 'last 30 days vs. last 90 days',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout, {responsive: true});
                        
                        </script>
                </div>

            </div>





        </div>
        <!--news row  -->
        <div class="block" id="news">
            <h2 style="margin-left: 15px"><a href="news-page.php" class="title">Latest News</a></h2>
            <div class="row">

                <div class="col-md-6"> <a class="nounderline" href="article-news.php">
                        <div class="card" style="width: 100#%;">
                            <img class="card-img-top" src="../pic/news1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"> Sterling overnight volatility jumps to highest since 2017 UK general election</p>


                            </div>
                        </div>
                    </a>

                </div>
                <!-- 2nd col-->
                <div class="col-md-6">
                    <!-- 1st row in the 2nd col-->
                    <div class="row">
                        <div class="col-md-6">
                            <a class="nounderline" href="article-news.php">
                                <div class="card" style="width: 100#%;">
                                    <img class="card-img-top" src="../pic/news2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Dollar falls as Fed officials ring note of caution, pound bounces</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="col-md-6">
                            <a class="nounderline" href="article-news.php">
                                <div class="card" style="width: 100#%;">
                                    <img class="card-img-top" src="../pic/news3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bitcoin Prices Again Below $8K, But Traders Forecast Fresh Upside</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- 2nd row in the 2nd col-->

                    <div class="row mt-2">
                        <div class="col-md-6"><a class="nounderline" href="article-news.php">
                                <div class="card" style="width: 100#%;">
                                    <img class="card-img-top" src="../pic/news4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Crypto Market Suffers From Uncertainty in Asia, Losses Up to 40%</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-6"><a class="nounderline" href="article-news.php">
                                <div class="card" style="width: 100#%;">
                                    <img class="card-img-top" src="../pic/1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">I ran out of titles Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </div>
                            </a></div>
                    </div>


                </div>




            </div>

        </div>

        <div class="block" id="blog">
            <h2 style="margin-left: 15px"><a href="blog.php" class="title">Blog</a></h2>
            <!--first row-->
            <div class="row">

                <div class="col-md-6">

                    <img src="../pic/blog1.jpg" style="height: 100%;width: 100%"></div>
                <div class="col-md-6">
                    <h4>What is Blockchain Technology?</h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis, dolor sollicitudin rhoncus scelerisque, sem quam pharetra magna, ac lacinia elit ligula a nisl. Duis ut nisl ac eros viverra fermentum. Aliquam rutrum dignissim mauris, in finibus tortor imperdiet nec. Pellentesque urna sem, accumsan a sapien sit amet, mattis ultricies mauris. Vivamus accumsan eros non libero laoreet porta. Aliquam erat volutpat. Phasellus pulvinar eu nisi sed vehicula. Ut ullamcorper rhoncus ante, sed fringilla ex. Praesent justo odio, consectetur sit amet lorem a, hendrerit congue tortor. Aliquam ornare leo ipsum, eget tristique purus vestibulum in. Donec ipsum leo, interdum id porta ut, bibendum vitae justo. Sed eros felis, auctor scelerisque eros et, mattis fermentum sapien. Sed ante ex, lacinia nec turpis ac, ultrices suscipit dolor. Donec nec augue vel ipsum tristique dictum. Maecenas sollicitudin commodo augue et fermentum. Curabitur erat mauris, tincidunt nec commodo sagittis, .
                    <span><a href="article-news.php"><button type="button" class="btn btn-outline-primary read" style="width:100px ;margin-top:0">read more...</button></a></span>

                </div>

            </div>
            <!--2nd row-->

            <div class="row ">
                <div class="col-md-4 mt-2 mb-2"><a class="nounderline" href="article-news.php">
                        <div class="card" style="width: 100#%;">
                            <img class="card-img-top" src="../pic/blog2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">How to protect yourself from cryptomining
                                </p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-4 mt-2 mb-2"><a class="nounderline" href="https://bitcoin.org/bitcoin.pdf?fbclid=IwAR2k_QYsVFM4kfK04-S6LHPPUpII8r5fcIwCw8SMuGVwpa63BRwz_tqDKSM">
                        <div class="card" style="width: 100#%;">
                            <img class="card-img-top" src="../pic/blog3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Bitcoin: A Peer-to-Peer Electronic Cash System
                                </p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-md-4 mt-2 mb-2"><a class="nounderline" href="article-news.php">
                        <div class="card" style="width: 100#%;">
                            <img class="card-img-top" src="../pic/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </div>
                    </a></div>

            </div>


        </div>
    </div>
    <!--social -->
    <div>
        <div class="social-email" id="contact-us">

            <h2>Newsletter Subscription</h2>

            <h3>Enter your E-mail address below to recive news and updates </h3>

            <form class="">
                <div class="">
                    <div class="row no-gutters">
                        <div class="col-md-2"></div>
                        <div class="form-group col-md-6 mb-2">
                            <input name="EMAIL" class="form-control" placeholder="Enter your E-mail" required="" type="email">
                        </div>
                        <div class="form-group col-md-2 mb-2">
                            <button type="submit" class="btn btn-email mt-0">subscribe</button>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

            </form>
            <div class="row">


                <div class="col-lg-3 col-md-6">

                    <a href="https://twitter.com/" class="media twitter-m" target="_blank">

                        <i class="fab fa-twitter"></i>

                        <div class="media-body">

                            <h5 class="mt-0">Twitter</h5>

                            <p>800K followers</p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3 col-md-6">

                    <a href="https://Youtube.com" class="media google-m" target="_blank">

                        <i class="fab fa-youtube"></i>

                        <div class="media-body">

                            <h5 class="mt-0">YouTube</h5>

                            <p>800K subscriber</p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3 col-md-6">

                    <a href="https://www.facebook.com" class="media facebook-m" target="_blank">

                        <i class="fab fa-facebook-f"></i>

                        <div class="media-body">

                            <h5 class="mt-0">Facebook</h5>

                            <p>800K Likes </p>

                        </div>

                    </a>

                </div>

                <div class="col-lg-3 col-md-6">

                    <a href="https://www.instagram.com/" class="media instagram-m" target="_blank">

                        <i class="fab fa-instagram"></i>

                        <div class="media-body">

                            <h5 class="mt-0">Instagram</h5>

                            <p>800K followers</p>

                        </div>

                    </a>

                </div>

            </div>

        </div>





    </div>

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
