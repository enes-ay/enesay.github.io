(function(){
     "use strict";
     const URL = 'https://api.openweathermap.org/data/2.5/weather?q=bandırma&appid=72bb3ad09090ff550b65d6bd8660aacb';
   
     var search_btn=document.getElementById('search');
     var search_form=document.querySelector(".search_form");
     var login=document.getElementById("login")
     var search_input=document.getElementById("search_input");
     var search_submit=document.getElementById("search_submit");

    
    /*Search Button start */
    function function_show(){

      window.location.href=search.php; 

    }
    
    search_submit.addEventListener("click",function_show);
  
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

      /*search start */



      var TRange=null;
      function findString (str) {
      if (parseInt(navigator.appVersion)<4) return;
      var strFound;
      if (window.find) {

        // CODE FOR BROWSERS THAT SUPPORT window.find
        strFound=self.find(str);
        if (strFound && self.getSelection && !self.getSelection().anchorNode) {
        strFound=self.find(str)
        }
        if (!strFound) {
        strFound=self.find(str,0,1)
        while (self.find(str,0,1)) continue
        }
      }
      else if (navigator.appName.indexOf("Microsoft")!=-1) {

        // EXPLORER-SPECIFIC CODE

        if (TRange!=null) {
        TRange.collapse(false)
        strFound=TRange.findText(str)
        if (strFound) TRange.select()
        }
        if (TRange==null || strFound==0) {
        TRange=self.document.body.createTextRange()
        strFound=TRange.findText(str)
        if (strFound) TRange.select()
        }
      }
      else if (navigator.appName=="Opera") {
        alert ("Opera browsers not supported, sorry...")
        return;
      }
      if (!strFound) alert ("String '"+str+"' not found!")
      return;
      }
      /*search finish */



      
   
   })();


