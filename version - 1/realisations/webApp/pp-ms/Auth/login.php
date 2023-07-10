<?php

session_start(); 

include '../CRUD/config.php';

$email = $_POST['lg_email'];
$pass = $_POST['lg_password'];


if (empty($email)) {

    header("Location: index.php?lg_email_err=E-mail address is required");

    exit();

}
 if(empty($pass)){

    header("Location: index.php?lg_pwd_err=Password is required");

    exit();

}else{

    $sql = "SELECT * FROM users WHERE email='$email' AND pwd='$pass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['email'] === $email && $row['pwd'] === $pass) {

            echo "Logged in!";

            $_SESSION['email'] = $row['email'];

            $_SESSION['name'] = $row['name'];

            $_SESSION['id'] = $row['id'];

            header("Location: ../index.php");

            exit();

        }else{

            header("Location: index.php?lg_err=Incorect User or password");

            exit();

        }

    }else{

        header("Location: index.php?lg_err=Incorect User or password");

        exit();

    }

}












?>