<!DOCTYPE html>
<?php
  console.log("123");
  if(isset($_POST['login'])){
    $user = $_POST["email"];
    $pw = $_POST["password"];
    if ($user == "user" && $pw == "111"){
      echo("aaaaaa");
    }
    echo("bbbbb");
  }
?>
<html>
<head>
<title>Login Form Using jQuery - Demo Preview</title>
<meta name="robots" content="noindex, nofollow">
<!-- Include CSS File Here -->
<link rel="stylesheet" href="css/loginstyle.css"/>
<!-- Include CSS File Here -->
<script src="jQuery-and-JavaScript-js\jquery-2.0.3.min.js"></script>
<script type="text/javascript">
    function success(){ console.log("Login OK"); alert("Login Succeeded"); }

    function failure(){console.log("Login Failed");  alert("Login Failed"); }

    function always(){ console.log("Login done"); alert("Login Request done"); }

    function login(){
      $.get("jQuery-and-JavaScript-login.php",
      $("#loginForm").serialize()).done(success).fail(failure).always(always);
      return false;
    }

</script>
</head>
<body>
<div class="container">
<div class="main">
<form method="post" action="jQuery-and-JavaScript-login.ph" id="loginForm">
<h2>Create Login Form Using jQuery</h2>
<label>Email :</label>
<input type="text" name="email" id="email">
<label>Password :</label>
<input type="password" name="password" id="password">
<input type="button" name="login" id="login" value="Login">
</form>
</div>
</div>
</body>
</html>
