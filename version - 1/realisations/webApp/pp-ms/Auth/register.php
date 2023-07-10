 <?php

session_start(); 

include '../CRUD/config.php';

$name=$_POST['name'];	
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$email_err=$name_err=$pwd_err=$cpwd_err="";
$error=array(
    "type"=>"error",
    "msg"=>$name
);
if(empty($name)){
    header("Location: index.php?name_err=array(
                'type'=>'error',
                'msg'=>$name
            )");
   $status=false;
    exit();
}

//validate email first
if(empty($email)){ 
    header("Location: index.php?name_err=$error");
 $email_err="Please enter your email address";
}
else if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: index.php?name_err=$error");
    $email_err="Please enter a valid email address";
}
if(empty($pwd)){
    $pwd_err="Your password is required";
}
if(strcmp($pwd, $cpwd)){
    $cpwd_err="Your confirm password not mach";
}
$sql = "insert into users(name,email,pwd) values('$name','$email','$pwd')";

if(mysqli_query($conn, $sql)){
    echo "Registration Complete with success !";
}else{
    "Error: ".$sql." <br> ".mysqli_error($com);
}
mysqli_close($conn);
 
// header("location:index.php");

?>