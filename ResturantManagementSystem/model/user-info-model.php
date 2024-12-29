<?php
require_once('database.php');

function login($email, $password) {
    $con = dbConnection();
    $query = "SELECT * FROM UserInfo WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        return $row;
    } else {
        return null;
    }
    mysqli_close($con);
}

function addUser($fullname, $phone, $email, $username, $password, $role) {
    $con = dbConnection();
    $query = "INSERT INTO UserInfo 
              VALUES('', '$fullname', '$phone', '$email', '$username', '$password', '$role')";
    $result = mysqli_query($con, $query);

    if ($result) {
        return true;
    } else {
        return false;
    }
    mysqli_close($con);
}

function uniqueEmail($email) {
    $con = dbConnection();
    $query = "SELECT email FROM UserInfo WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return false;
    } else {
        return true;
    }
    mysqli_close($con);
}
?>
