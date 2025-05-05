<?php
ini_set('display_error',1);

require_once('dbconnect.php');
require_once('sessionconfig.php');


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $getfirstname = textfilter($_POST['firstname']);
    $getlastname = textfilter($_POST['lastname']);
    $getemail = textfilter($_POST['email']);
    $getpassword = md5(textfilter($_POST['password']));
    $getdob = textfilter($_POST['dob']);
    $getrollno = textfilter($_POST['rollno']);
    $getdepartment = textfilter($_POST['dpm']);
    $getphone = textfilter($_POST['phone']);
    $getaddress = textfilter($_POST['address']);
  //$getdocuments = $_POST['student_types']);
    $getnewsletter = textfilter($_POST['newsletter']);

    // echo $getfirstname;
    // echo $getlastname;
    // echo $getemail;
    // echo $getpassword;
    // echo $getdob;
    // echo $getrollno;
    // echo $getdepartment;
    // echo $getphone;
    // echo $getaddress;
    // echo $getnewsletter;
   
    if($getemail && $getpassword){
        try{
            $stmt = $conn->prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,rollno,department,phone,address,student_types,newsletter	)
            VALUES (:profile,:firstname,:lastname,:email,:password,:dob,:rollno,:department,:phone,:address,:student_types,:newsletter)");

            //Binding
            $stmt->bindParam(":profile",$bindprofile);
            $stmt->bindParam(":firstname",$bindfirstname);
            $stmt->bindParam(":lastname",$bindlastname);
            $stmt->bindParam(":email",$bindemail);
            $stmt->bindParam(":password",$bindpassword);
            $stmt->bindParam(":dob",$binddob);
            $stmt->bindParam(":rollno",$bindrollno);
            $stmt->bindParam(":department",$binddepartment);
            $stmt->bindParam(":phone",$bindphone);
            $stmt->bindParam(":address",$bindaddress);
            $stmt->bindParam(":student_types",$bindstudent_type);
            $stmt->bindParam(":newsletter",$bindnewsletter);
          
            $countfiles = count($_FILES['profile']['name']);

      if($countfiles){
        for($x = 0 ; $x < $countfiles ; $x++){

          $getuniqid = uniqid().'_'.time();
          $uploaddir  = "./public/assets/";

          $getextension = pathinfo($_FILES['profile']['name'][$x],PATHINFO_EXTENSION);
          $newfilename = $getuniqid.".".basename($getextension);//
          $uploadfile =  $uploaddir.basename($newfilename) ;

          $uploadsize = $_FILES['profile']['size'][$x];
          $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
          $allowextension = ["jpg","jpeg","png","gif"];
          $errors = [];

          //check file size
          if($uploadsize > 600000){
            $errors[] = "Sorry , Your file is too large. <br/>";
          
          }

          //check file format or extension
          if(in_array($uploadtype,$allowextension) === false){
            $errors[] = "We only allow JPG,JPEG,PNG,GIF files types";
          
          }

          //upload
          if(empty($errors) === true){
           
            if(move_uploaded_file($_FILES['profile']['tmp_name'][$x],$uploadfile)){
                
              $bindprofile = $uploadfile;
              echo "File Successfully Uploaded";
            }else{
              echo "Try Again";
            }
          }else{
            echo "<pre>".print_r($errors,true)."</pre>";
          }
   
        }
      }


            $bindfirstname = $getfirstname;
            $bindlastname = $getlastname;
            $bindemail = $getemail;
            $bindpassword = $getpassword;
            $binddob = $getdob;
            $bindrollno = $getrollno;
            $binddepartment = $getdepartment;
            $bindphone = $getphone;
            $bindaddress = $getaddress;
            $bindnewsletter = $getnewsletter;

            $getstudent_types = null;

            if(isset($_POST['student_types'])){
                $stts = $_POST['student_types'];

                foreach($stts as $stt){
                    $getstudent_types .= $stt.",";
                }
            }

            $bindstudent_type = $getstudent_types;

            //Execute
            if($stmt->execute()){

                //store in session
                setsession('email',$bindemail);
                setsession('password',$bindpassword);
                redirectto('login.php');
            }else{
                echo "Try Again";
            }

        }catch(PDOException $e){
            echo "Error Found : " . $e->getMessage();
          }
          $conn = null;
    }
}
function textfilter($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);

    return $data;
}

?>
 <!-- id	profile	firstname	lastname	email	password	dob	rollno	department	phone	address	student_type	newsletter	 -->
<!-- CREATE TABLE IF NOT EXISTS users(
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  profile VARCHAR(255),
  firstname VARCHAR(20),
  lastname VARCHAR(20),
  email VARCHAR(30) UNIQUE,
  password VARCHAR(255),
  dob DATE,
  rollno VARCHAR(100),
  department VARCHAR(100),
  phone VARCHAR(13),
  address VARCHAR(100),
  student_types VARCHAR(100),
  newsletter TINYINT(1)

); 

DESC users
-->