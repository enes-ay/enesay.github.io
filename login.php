<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="login.css">
<title>Login</title>

</head>
<body>

<form id="login_form" action="login.php" method="POST">
  <h2 id="h2_login" >Giriş Yap </h2>
  <hr>


  <div class="container">
    <label for="uname"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adınızı giriniz " name="usrname" required>

    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Şifrenizi giriniz" name="psw" required>

    <button type="submit"><a>Giriş Yap</a></button>
    
    <button type="button" class="cancelbtn">Cancel</button>
    
  </div>

    
 
</form>
</body>
</html>

<?php
session_start();

if(isset($_POST["usrname"],$_POST["psw"])){
  if($_POST["usrname"]=="admin" && $_POST["psw"]=="1234") {
    $_SESSION["user"]=$_POST["usrname"];
    header("location:panel.php");
  }
  else {
    echo "<script>alert('kullanıcı adı veya şifre yanlış')</script>";
  }
}

?>
