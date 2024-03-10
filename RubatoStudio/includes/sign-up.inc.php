<?php

if(isset($_POST["submit"]))
{
    // Getting data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    //Instantiate signUpCtrl class
    include "../classes/dbh.cls.php";
    include "../classes/sign-up.cls.php";
    include "../classes/sign-up-ctrl.cls.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    //Run error handlers and sign up user
    $signup->signupUser();

    header("location: ../homepage.html?error=none");
}