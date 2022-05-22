(function(){
     "use strict";
   
     var search_btn=document.getElementById('search');
     var search_form=document.querySelector(".search_form");
    function function_show()
    {
      window.alert("yakında eklenecek");
    }  
    search_btn.addEventListener("click",function_search);

     function function_search()
    {
      search_form.classList.toggle("active");  
    }
    
   
   
     // other functions you may define
   })();


