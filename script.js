(function(){
     "use strict";

     const textContainer = document.getElementById("text-container");
     const texts = ["I'm a 3rd-grade Computer Engineering student", "interested in AI and IoT","and passionate about technology"];
     let currentIndex = 0;
     
     function changeText() {
       textContainer.innerText = texts[currentIndex];
       currentIndex = (currentIndex + 1) % texts.length;
     }
     
     setInterval(changeText, 2000);

      
   
   })();


