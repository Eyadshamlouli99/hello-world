<?php

session_start();

?>




    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>sign-up </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/Sign-up-page.css">
        <style>
            .aal{
                background-color: red;
            }
        </style>
        <script type="text/javascript">
            function show(){

                var username=document.getElementById("username").value;
                var password=document.getElementById("password").value;
                var repeatpassword=document.getElementById("repeatpassword").value;
                var email=document.getElementById("email").value;
                var fileName="linkajax.php?username="+username+"&password="+password+"&repeatpassword="+repeatpassword+"&email="+email;
                var xmlObject = new XMLHttpRequest();
                xmlObject.onreadystatechange=function(){
                    if(this.readyState==4&&this.status==200){
                        document.getElementById("p").innerHTML=this.responseTxt;
                    }
                };
                xmlObject.open("POST",fileName,true);
                xmlObject.send();
            }


        </script>
    </head>
    <?php
    
    $username1=$_REQUEST['username1'];
    $password1=$_REQUEST['password1'];
    $repeatpassword=$_REQUEST['repeatpassword'];
    $email=$_REQUEST['email'];

    if($_SERVER['REQUEST_METHOD']=="POST"){

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr="please enter a valid email";
            $email='';
        }if(ctype_alpha($username1)==false||strlen($username1)>40){

            $usernameerr="username must only contain characters";
            $username1='';
        }
        if($password1!=$repeatpassword){
            $passworderr="the two passwords must match";
            $password1='';
            $repeatpassword='';

        }

        $_SESSION['username1']=$username1;
        $_SESSION['email']=$email;
        $_SESSION['password1']=$password1;
    
    }
    ?>
    <body>
    <script src="../js/sign-up.js"></script>
    <script src="../js/jq.js"></script>
    <script src="../js/poper.js"></script>
    <script src="../js/bootstrap.min.js"></script>







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
            <h1 class="title" >Sign-up</h1>
            <form method="POST"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <div class="form-group">
                    <label> User name</label>
                    <input type="text" required="required"name="username1" id="username"placeholder="Username" class="form-control"value="<?php
                    if(ctype_alpha($username1)==true) echo $username1; else echo '';?>"><?php  echo $usernameerr; ?>
                    <span class="the-message"> Please fill the text</span>
                </div>

                <div class="form-group">
                    password<input type="password"id="password"name="password1"   required="required"  placeholder="Password"  class="form-control"value="<?php echo $password1;?>"><?php echo $passworderr;?>
                    <span class="the-message">Please fill the text</span>
                </div>
                <div class="form-group">
                    <label>Repeat your password</label>
                    <input type="password"id="repeatpassword"name="repeatpassword" required="required"  placeholder="Repeat" class="form-control"value="<?php echo $repeatpassword;?>"><?php echo $passworderr; ?>
                    <span class="the-message">Please fill the text</span>
                </div>


                <div class="form-group">
                    <label>Email Adress</label>
                    <input type="email"id="email"name="email"  required="required"  placeholder="@Email" class="form-control"value="<?php echo $email; ?>"><?php
                    echo $emailerr;?>
                    <span class="the-message">Please fill the text</span>
                </div>
                <p class="p">


                </p>
                <input type="submit"class="btn btn-primary btn-block"onclick="show()"><a id="log2" href="">  JOIN-US</a></input><br>
                <input type="hidden" name="flag"value="1">

            </form>

        </div>
        <div class="row">
            <div class=" col-lg-4 offset-lg-4">
                <button class="btn btn-primary btn-block  but1" > <a id="log" href="Sign-in.php">I Have An Account </a> </button> <br>
            </div>
        </div>

    </div>



    <div id="sqlspace"></div>


    </body>
    </html>




<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $database = "currency";
    $servername = "localhost";
    $username = "root";
    $password = "123";

    $conn=new mysqli($servername,$username,$password,$database);

    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    $sql="
CREATE TABLE signup(
username varchar(40) NOT NULL,
password int(20)NOT NULL,
repeatpassword int(20)NOT NULL,
email varchar(50)NOT NULL PRIMARY KEY
)
";
    if($conn->query($sql)===TRUE){
        echo"table created ";
    }








    $sql2="select * from signup where email='$email'

";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0){
       echo"you have successfully created an Account you may now log-in";
      /*  echo "<table border>";
        echo "<tr><th> username <th> password <th> Email ";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['username'];
            echo "<td class =aal>" . $row['password'];

            echo "<td>" . $row['email'] ;

        }
        echo "</table>";*/
    }



}





?>