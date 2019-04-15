<?php
header('Content-type: text/html');
$logins_s = array('student' => 'student');
$logins_t = array('tutor1' => 'tutor1','tutor2' => 'tutor2');

/* Check and assign submitted Username and Password to new variable */
$Username = $_GET["user"];
$Password = $_GET["pw"];
$UserType = $_GET["userType"]
/* Check Username and Password existence in defined array */
if ($UserType === "Student"){
  if (isset($logins_s[$Username]) && $logins_s[$Username] == $Password){
    echo "Welcome To Ajax!";
    return;
  }
}else{
  if (isset($logins_t[$Username]) && $logins_t[$Username] == $Password){
    echo "Welcome To Ajax!";
    return;
  }
}
header("HTTP/1.0 400 Login Failed");
echo "Invalid Credentials.";
?>
