
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $database = "currency";
    $servername = "localhost";
    $usernamee = "root";
    $passwordd = "123";


    $username1=$_REQUEST['username'];
    $password1=$_REQUEST['password'];
    $repeatpassword=$_REQUEST['repeatpassword'];
    $email=$_REQUEST['email'];


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


$conn=new mysqli($servername,$usernamee,$passwordd,$database);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

$sql1="
INSERT INTO signup(username,password,repeatpassword,email) VALUES ('$username1',$password1,$repeatpassword,'$email');

";

if($conn->query($sql1)===TRUE){
    echo"your record is created succesfully";
}






}

?>