<?php
header('Content-type: text/html');
$logins = array('student' => 'student','tutor1' => 'tutor1','tutor2' => 'tutor2');

/* Check and assign submitted Username and Password to new variable */
$Username = $_GET["user"];
$Password = $_GET["pw"];
/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password){
  echo "Welcome To Ajax!";
  return;
}
header("HTTP/1.0 400 Login Failed");
echo "Invalid Credentials.";
?>
