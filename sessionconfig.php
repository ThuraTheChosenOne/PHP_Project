<?php
session_start();

function setsession($key,$val){
    $_SESSION[$key] = $val;
}

function getsession($key){
    return $_SESSION[$key];
}

//make sure if there is particular data or not
function verifysession($key){
    return isset($_SESSION['$key']);
}

//logout
function unsetsession($key){
    unset($_SESSION['$key']);
}

function destroyallsession(){
    session_destroy();
}

function authfailed(){
    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        return true;
    }
}

function  redirectto($url){
    header("Location:$url");
}

//optional for userlist display
// function formatprint($array){
//     echo "<pre>".print_r($array,true)."</pre>";
// }


?>