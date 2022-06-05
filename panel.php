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
<!-- 
<table id="users">
  <tr>
    <th>Ad Soyad</th>
    <th>e-mail </th>
    <th>telefon</th>
    <th>mesaj</th>
    
  </tr>
  -->
  
 
</table>

</body>
</html>

<?php
include("connect.php");
$sec="SELECT * FROM iletisim";
$sonuc=$connect->query($sec);

if($sonuc->num_rows>0)
{
  echo "<table id='users' >";
  
  echo "<th>Ad Soyad</th>
  <th>Mesaj </th>
  <th>E-mail</th>
  <th>telefon</th>
  ";

  while($cek=$sonuc->fetch_assoc()){

   
    echo "<tr>";
        echo "<td>".$cek['ad']."</td>";
        echo "<td>".$cek['email']."</td>";
        echo "<td>".$cek['telefon']."</td>";
        echo "<td>".$cek['mesaj']."</td>";
    echo "</tr>";
    }
    echo "</table>";
    }
    else{
      echo "bulunamadı";

    }
session_start();
if($_SESSION["user"]==""){
  echo "<script>window.location.href='logout.php'</script>";

}
else{
  echo "<br>kullanıcı adınız:".$_SESSION['user']."<br><br><br>";
  echo "<a href='logout.php'>çıkış yap</a>";

}



?>
  