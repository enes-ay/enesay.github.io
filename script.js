(function(){
     "use strict";
     const URL = 'https://api.openweathermap.org/data/2.5/weather?q=bandırma&appid=72bb3ad09090ff550b65d6bd8660aacb';
   
     var search_btn=document.getElementById('search');
     var search_form=document.querySelector(".search_form");
     var login=document.getElementById("login")
     var search_input=document.getElementById("search_input");

     login.addEventListener("click",function_login);

     function function_login(){
      alert("eklenecek");
     }
    
    /*Search Button start */
    function function_show()
    
      {
        alert("yakında eklenecek");
      }  

    search_input.addEventListener("keyup",function_show);
  
    search_btn.addEventListener("click",function_search);

     function function_search()

      {
        search_form.classList.toggle("active");  
      }
    /*Search Button finish */

     /*Weather api start*/
     
     var  displayweather=response=>{
      let sonuc=document.getElementById("weather_result");
      let details=document.getElementById("details");
      sonuc.innerText=`${Math.round(response.main.temp)-274}°C`
      details.innerHTML=`Nem oranı: %${response.main.humidity}\n
      min:${Math.round(response.main.temp_min-274)}°C/max:${Math.round(response.main.temp_max-274)}°C`

      
      
    } 
    window.onload=makeRequest();
        
    function makeRequest() {  
       fetch(URL)
      .then(weather => weather.json())
      .then(displayweather)
    }


    
      /* Weather api finish */
   
   })();


