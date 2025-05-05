<?php

include_once "sessionconfig.php";
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['password']);
 if(!isset($_SESSION['email']) &&  !isset($_SESSION['password'])){
    redirectto('public/webpage/index.php');
}
// include_once "sessionconfig.php";
// unsetsession('email');
// unsetsession('password');


// if(authfailed()){
//     redirectto('login.php');
// }

// redirectto('login.php');
?>