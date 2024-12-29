<?php
    session_start();
    require_once('../model/user-info-model.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(strlen(trim($email)) == 0 || strlen(trim($password)) == 0){
        header('location:../view/sign-in.php?err=empty');
        return;
    }

    $status = login($email, $password);

    if($status!=false){
        if($status['Role'] == "Manager"){
            $_SESSION['LoggedIn'] = "true";
            if($rememberMe) setcookie("LoggedIn", true, time()+99999, "/");
            else setcookie("LoggedIn", true, time()+10, "/");
            setcookie("id", $status['userID'], time()+3600*24*30, "/");
            header('location:../view/manager-home.php');
            
        }
    }else header('location:../view/sign-in.php?err=mismatch');


?>