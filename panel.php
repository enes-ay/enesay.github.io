<!DOCTYPE html>
<html>
<head>
<style>
#users {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Kayıtlar</h1>

<table id="users">
  <tr>
    <th>Ad Soyad</th>
    <th>Mesaj </th>
    <th>E-mail</th>
    
  </tr>
  
  <tr>
    <td>Enes Ay</td>
    <td>Not alındı</td>
    <td>enesay240@gmail.com</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>Simon Crowther</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Paris spécialités</td>
    <td>Marie Bertrand</td>
    <td>France</td>
  </tr>
</table>

</body>
</html>
<?php

session_start();
if($_SESSION["user"]==""){
  echo "<script>window.location.href='logout.php'</script>";

}
else{
  echo "<br>kullanıcı adınız:".$_SESSION['user']."<br><br><br>";
  echo "<a href='logout.php'>çıkış yap</a>";

}
?>


