
<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
    $username1=$_REQUEST['user_name'];
    $password1=$_REQUEST['password1'];


    $username='root';
    $password='123';
    $servername="localhost";
    $database='currency';
    $message="";
    $conn = new mysqli($servername,$username,$password,$database);
    if ($conn->connect_error) { die("<script>alert('Connection failed: $connection->connect_error');</script>"); }
    if(count($_POST)>0) {
        $result = mysqli_query($conn,"SELECT * FROM signup WHERE username='" . $_REQUEST["user_name"] . "' and password = '". $_REQUEST["password1"]."'");
        $count  = mysqli_num_rows($result);
        if($count==0) {
            $message = "Invalid Username or Password!";
        } else {
            $message = "You are successfully authenticated!";
            $_SESSION['user_name']=$username1;

            $_SESSION['password1']=$password1;
            header("location: homepage.php");
        }
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <title>sing in </title>
    <link rel="stylesheet" type="text/css" href="../css/Sign-in.css">

</head>
<body>
<!-- scripts -->
<script src="../js/sign-in.js"></script>
<script src="../js/jquere.js"></script>
<script src="../js/poper.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/sign-in.js"></script>
<!-- scripts -->


<div class="container-fluied">
    <div class="row">
        <div class="col-lg-11">
            <div style="justify-content: center; "><a href="homepage.php"> <img src="../pic/logo-exchangerates5.png" style=" height: 98px ;margin-top: 20px; width:98px; margin-left: 50%;"></a> </div>
        </div>

    </div>
    <div class="row" style="justify-content: center;">
        <a href="#sdsd" style="text-decoration: none;"><span id="textlogo">Currency</span><span id="textlogo2">Converter</span></a>
    </div>
    <div class="login-form col-lg-4 offset-lg-4">
        <h1 class="title" >Sign-in</h1>

        <form action="Sign-in.php" method="post">
            <div class="form-group">
                <label>username</label>
                <input  type="text" name="user_name" required="required" placeholder="User" class="form-control">
                <span class="the-message"> Please fill the text</span>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password"  required="required" placeholder="Password" name="password1" class="form-control">
                <span class="the-message">Please fill the text</span>
            </div>
            <div class="form-group">
                <input type="checkbox" name="">Remember Me
            </div>

            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Sign in">
            <input type="hidden" name="flag" value="0">

            <?php
             if($_SERVER['REQUEST_METHOD']=="POST" && $_REQUEST['flag']=="0"){

               if($message!="") { echo "$message"; }
             }
            ?>

        </form>

    </div>
    <div class="row">
        <div class=" col-lg-4 offset-lg-4">
            <form action="Sign-up-page.php" method="post">
                <input class="btn btn-primary btn-block but1" type="submit" name="submit" value="Create new Account">
            </form>
        </div>
    </div>
    <br>
    <footer>
        <div class="row" style="justify-content: center;">
            <div class="col-1" >
                <a id="log2" href="homepage.php"> Home</a>
            </div>
            <div  class="col-1">
                <a id="log2" href="blog.php"> blog</a>

            </div>
            <div  class="col-1">
                <a id="log2" href="news-page.php"> news</a>
            </div>
            <br>
            <br>
            <br>
        </div>
    </footer>

</div>
</body>

</html>