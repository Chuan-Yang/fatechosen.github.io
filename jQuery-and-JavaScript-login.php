<?php
if ($_GET["email"] === "user" && $_GET["password"] === "password" ){
  echo "Welcome To Ajax!";
  return;
}
header("HTTP/1.0 400 Login Failed");
echo "Invalid Credentials.";
?>
