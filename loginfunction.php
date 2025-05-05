<?php
ini_set('display_errors',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');


if($_SERVER['REQUEST_METHOD']==="POST"){
 
  $getemail = textfilter($_POST['email']);
  $getpassword = md5(textfilter($_POST['password']));
 

  if($getemail && $getpassword){
    loginverify($getemail,$getpassword);
  }else{
    echo "Enter Username & Password";
  }

}

function textfilter($data){
  $data = trim($data);
  $data = htmlspecialchars($data);
  $data = strip_tags($data);
  return $data;
}

function loginverify($email,$password){

  try{
    $conn = $GLOBALS['conn'];

    $stmt = $conn->prepare("SELECT email,password FROM users WHERE email=:email AND password=:password");

    $stmt->bindParam(":email",$bindemail);
    $stmt->bindParam(":password",$bindpassword);

    $bindemail = $email;
    $bindpassword = $password;

    $stmt->execute();

    if($stmt->rowCount() === 0){
      // echo "No data";//takal loz rowcount == 0 so data ma shi buu

      redirectto('login.php');
    }else{
      //  echo "Has data";
      
      setsession('email',$bindemail);
      setsession('password',$bindpassword);

      redirectto('public/webpage/index.php');
    }

  }catch(PDOException $e){
    echo "Error Found : " . $e->getMessage();
  }
}
?>
