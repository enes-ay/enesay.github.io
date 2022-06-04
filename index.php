
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">    
    <title>Enes Ay Kişisel Websitesi</title>
</head>
<body>
    
  
       <div class="header">
           
           <div class="logo">
            <a href="#">Enes Ay</a>
           </div>
           <ul id="menufull">
                <li><a href="#tohome">ANASAYFA</a> </li>
                <li><a href="#tohakkımda">HAKKIMDA</a> </li>
                <li><a href="#toözgeçmiş">ÖZGEÇMİŞ</a> </li>
                <li><a href="#tomessage_form">BİZE ULAŞ</a> </li>
                <li><a href="#toiletişim">İLETİŞİM</a> </li>
           </ul>
           <form class="search_form"  name="f1" action=""
           onSubmit="if(this.t1.value!=null && this.t1.value!='') findString(this.t1.value);return false">
            <input id="search_input" type="text" value="" name=t1 placeholder="Yazınız">
            <button type="submit" name=b1 id="search_submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
       </div> <!-- header finish-->

       <div class="buttons">
            <button id="search"><i class="fa-solid fa-magnifying-glass"></i></button>
            <a href="login.php"><button id="login" ><i class="fa-solid fa-user-large"></i></button></a>
        </div>
        <div class="havaDurumu">
           <h2 id="city_weather">
               Bandırma
            </h2>
            <p id="weather_result"  >
            
            </p>
            <p id="details"  >
               
            </p>
        </div>
        <!-- CONTENTS START -->

       <section id="tohome" class="home">
           <div class="content">
               <h3>
                  ENES AY KİŞİSEL WEBSİTESİ
               </h3>
            
           </div>
         
        </section>
    
       <section id="tohakkımda" class="hakkımda">

                    <h2>
                        HAKKIMDA
                    </h2>
                    <p>
                    2002 Eskişehir doğumluyum.Bandırma Onyedi Eylül Üniversitesi'nde
                     Bilgisayar Mühendisliği 2.sınıf öğrencisiyim.
        
                    </p>

       </section>

       <section id="toözgeçmiş" class="özgeçmiş">
           <h2>
               ÖZGEÇMİŞ
           </h2>
           <p id="name">ENES AY</p>
           <p>
               
               <br>
               <b>Kişisel Bilgiler</b><br>
               2002, Eskişehir<br>
               enesay240@gmail.com<br>
               <b>Eğitim Bilgileri</b><br>
               Bandırma Onyedi Eylül Üniversitesi<br>
               Bilgisayar Mühendisliği 2020-2024<br>
               <b>İlgi Alanları</b><br>
               IoT, Android Programlama, Siber Güvenlik <br>
               <b>Dijital Beceriler</b><br>
               Java, Kotlin, C/C++

           </p>
       </section>

       <section id="toiletişim" class="iletişim">
               <h2>
                 İLETİŞİM

                </h2>
                <p>
                    enesay240@gmail.com<br>
                    Odunpazarı/Eskişehir
                </p>
        </section>
        <section id="tomessage_form">
            <div class="contact">

                <h3>BİZE ULAŞ</h3>
                <input class="inputs" type="text" name="isim" placeholder="Ad Soyad" required><br>
                <input class="inputs" type="text" name="email"placeholder="E-mail" required><br>
                <input class="inputs" type="text" name="tel" placeholder="Telefon "><br> 
                <textarea id="message_area" name=mesaj placeholder="Mesajınız" required ></textarea>
                <input id="gönder_btn"type="submit"  value="gönder" >

            </div>
    </section>
      <!-- CONTENTS FINISH -->

    <div class="social">

        <a id="github" href="https://github.com/enes-ay" target="_blank"><i class="fa fa-github"></i></a>
        <a id="gmail" href="https://www.google.com/intl/tr/gmail/about/" target="_blank" ><i class="fa fa-google"></i></a>
        <a id="linkedin" href="https://www.linkedin.com/in/enes-ay-2446191b3/" target="_blank" ><i class="fa fa-linkedin"></i></a>
        <a id="instagram" href="https://www.instagram.com/ay__enes/?hl=tr" target="_blank"><i class="fa fa-instagram"></i></a>


    </div>


    <div class="footer">
        <p id="footer_info">All rights reserved <b>|</b> 2022</p>
    </div>

    
    <script src="script.js" ></script> 
</body>
</html>


<?php

include ("connect.php");
?>