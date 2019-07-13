<?php
session_start();

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
            <div style="justify-content: center; "><a href="#home"> <img src="../pic/logo-exchangerates5.png" style=" height: 98px ;margin-top: 20px; width:98px; margin-left: 50%;"></a> </div>
        </div>

    </div>
    <div class="row" style="justify-content: center;">
        <a href="#sdsd" style="text-decoration: none;"><span id="textlogo">Currency</span><span id="textlogo2">Converter</span></a>
    </div>
    <!-- <div style="justify-content: center; "><img src="../pic/logo-exchangerates5.png" style="margin-left: 500px ; height: 48px ;margin-top: 50px; width:  48px"> </div> -->
    <div class="login-form col-lg-4 offset-lg-4">
        <h1 class="title" >Change Your Password</h1>
        <form method="POST"action="<?php echo $_SERVER['PHP_SELF'];?>">
           
           

            <div class="form-group">
                <label>Write your old password</label>
                <input  name="password"type="password" name="" required="required" placeholder="old password" class="form-control">
                <span name="newpass"class="the-message"> Please fill the text</span>
            </div>

            <div class="form-group">
                <label>The new password</label>
                <input type="password"  required="required" placeholder="new password" name="newpass" class="form-control">
                <span class="the-message">Please fill the text</span>
            </div>



            <button class="btn btn-primary btn-block  but1">Change</button>

        </form>

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

<?php
$newpass=$_REQUEST['newpass'];
$username=$_SESSION['user_name'];
if($_SERVER['REQUEST_METHOD']=="POST"){

    $conn=new mysqli("localhost","root","123","currency");
    if($conn->connect_error){
        die("connection fail ".$conn->connect_error);
    }else echo "connection success";

$sql="UPDATE signup SET password=$newpass WHERE username='$username'";


if($conn->query($sql)===true){
    echo "your password has been changed";
     header("location: homepage.php");
}
}

?>