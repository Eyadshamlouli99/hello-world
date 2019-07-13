<?php
session_start();
if(isset($_SESSION['user_name']))
$imageFileType = strtolower(pathinfo($_SESSION["user_name"], PATHINFO_EXTENSION));

?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $target_dir = "uploads/";
    $user_name=$_SESSION['user_name'];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $_FILES["fileToUpload"]["name"]=$user_name.".".strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
// echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file

    } else {
        echo "<br>this ".$target_file;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Profile page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/Profile.css">


</head>

<body>


<div class="container-fluid ">
    <div class="nav"></div>
    <nav class="navbar navbar-expand-md fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="homepage.php"><img src="../pic/logo-exchangerates5.png" alt="exchanger"
                                                          width="45" height="45"> <span
                    id="textlogo">Currency</span><span id="textlogo2">Converter</span></a>
        <ul class="collapse navbar-collapse navbar-nav mr-auto ml-auto align-content-md-between ">
            <li class="nav-item ">
                <a class="nav-link " href="homepage.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="homepage.php#convert">Converter </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#news">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact-us">Contact Us </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about-us">About Us</a>
            </li>
            <?php
            if (!isset($_SESSION['user_name'])) {
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
            } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="Profile.php">
                        <button type="button" class="btn btn-outline-primary btnav" style="">Profile</button>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="sign-out.php">
                        <button type="button" class="btn btn-outline-primary btnav" style="">sign-out</button>
                    </a>
                </li>

                <?php
            }
            ?>

        </ul>

    </nav>
</div>
<!--end of nav-->


<!--end of nav-->


<div class=" mainforus row">


    <div class="div1 col-md-3">
        <?php
        if(isset($_SESSION['user_name'])){



        ?>
        <img src="uploads/<?php echo $_SESSION['user_name']; ?>.<?php echo $imageFileType ; ?>">
        <form action="Profile.php" method="post" enctype="multipart/form-data">
            <br>
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <?php
        }else {
            echo "<img src=\"uploads/default.png\">";
        }
        ?>


    </div>
    <div class="div2 col-md-8">
        <div class="h5">Hello! <?php if(isset($_SESSION['user_name'])) echo $_SESSION['user_name']; ?></div>

        <div class="row"></div>
        <div class="row-md">
            <span class="h2"> </span>
            <div class="row"></div>
            <!-- <span class="h3">I'm </span>  <span class="h2"> Abdallh Hotary</span> -->
            <p class="new  h5"> Programmer </p>
        </div>

        <div class=" last-row row">

            <div class="col-lg-4">
                <p>Age</p>
            </div>
            <div class="col-lg">
                <p>19</p>
            </div>


        </div>
        <div class="last-row row">

            <div class="col-lg-4">
                <p>Address</p>
            </div>
            <div class="col-lg">
                <p>Palestine</p>
            </div>


        </div>
        <div class="last-row row">

            <div class="col-lg-4">
                <p>E-Mail</p>
            </div>
            <div class="col-lg">
                <p>abd.a.hotary@mail.com</p>
            </div>


        </div>
        <div class="last last-row row">

            <div class="col-lg-4">
                <p>Phone</p>
            </div>
            <div class="col-lg-6">
                <p>0565489</p>
            </div>


        </div>
        <div class="last last-row row">

            <div class="col-lg-4">
                <p>Date of Birth </p>
            </div>
            <div class="col-lg-6">
                <p>9\1\99</p>
            </div>


        </div>
        <?php
        if (isset($_SESSION['user_name'])){


        ?>
            <a href="changePass.php">
                <button class="btn btn-outline-primary btnav">change your password</button>
            </a>
            <a href="delPass.php">
                <button class="btn btn-outline-primary btnav">delete your account</button>
            </a>
            <from method="POST" action="cv.php">
                <a href="cv.php"> <input type="submit" name="cv" value="write your cv/update it"
                                         class="btn btn-outline-primary btnav"></a>
            </from>
            <from method="POST" action="editor.php">
                <a href="editor.php"> <input type="submit" name="create" value="write an article"
                                         class="btn btn-outline-primary btnav"></a>
            </from>

        <?php
        } /*else
                echo " <from method=\"POST\" action=\"\">
                   <input type=\"submit\" name=\"cv\" value=\"view cv\" class=\"btn btn-outline-primary btnav\">
               </from>";
                */ ?>
    </div>

</div>



<!---footer-->

<footer style="" id="about-us">

    <div class="footer-top ">
        <div>
            <div class="row ">
                <div class="col-md-3 footer-about   mt-2">

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut dignissim lacus. Quisque
                        in accumsan nisl. Sed ultrices ac leo vel tempus.

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
        <div class="container-fluid ">
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