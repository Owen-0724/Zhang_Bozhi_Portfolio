(() => {
const player = new Plyr('video');

    (function(){
	"use strict";	
    let button = document.querySelector("#burger");
    let burgerCon = document.querySelector("#burger-con");

    function hamburgerMenu() {
        
        burgerCon.classList.toggle("slide-toggle");
        button.classList.toggle("expanded");
    
    };

    button.addEventListener("click", hamburgerMenu, false);   
    })();
    
    gsap.registerPlugin(ScrollTrigger);

    gsap.to('.box', {
        scrollTrigger: '.box', // start animation when ".box" enters the viewport
        x: 500
    });

    gsap.to(".line_r", 1,
        {scrollTrigger:{
            trigger: ".line_r",
  
            toggleActions: "restart resume reverse resume",
            markers: true,
  
            start: "top center",
  
            end: "bottom center"
        },
        x:100, ease:"power1.inOut"
        }
    ) ;  

})();