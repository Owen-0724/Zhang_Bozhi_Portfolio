import { initThemeToggle } from './themeToggle.js';

document.addEventListener('DOMContentLoaded', () => {
  initThemeToggle({
    buttonId: 'theme-toggle',
    iconId: 'theme-icon', 
    dayIcon: 'images/theme.svg',
    nightIcon: 'images/theme.svg',
  });
});
(() => {
    // Initialize Lenis
const lenis = new Lenis({
    autoRaf: true,
  });
  
  // Listen for the scroll event and log the event data
  lenis.on('scroll', (e) => {
    console.log(e);
  });

  document.addEventListener("DOMContentLoaded", () => {
    const bgVideo = document.getElementById("bg-video");
  
    // Try autoplaying
    if (bgVideo) {
      const playPromise = bgVideo.play();
  
      if (playPromise !== undefined) {
        playPromise
          .then(() => {
            console.log("Video autoplayed successfully.");
          })
          .catch(() => {
            console.log("Autoplay blocked. Waiting for user interaction...");
            // Try playing on first click/tap
            const tryPlay = () => {
              bgVideo.play();
              document.removeEventListener("click", tryPlay);
              document.removeEventListener("touchstart", tryPlay);
            };
            document.addEventListener("click", tryPlay);
            document.addEventListener("touchstart", tryPlay);
          });
      }
    }
  });
  
  let lastScroll = 0;
  const header = document.querySelector("header");
  
  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
  
    // Show header if at top or scrolling up
    if (currentScroll <= 0 || currentScroll < lastScroll) {
      header.classList.remove("hide-header");
    } else if (currentScroll > lastScroll && currentScroll > 50) {
      // Hide header when scrolling down
      header.classList.add("hide-header");
    }
  
    lastScroll = currentScroll;
  });
  

  
  




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
    
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);


    gsap.utils.toArray(".line_r").forEach((line) => {
        gsap.from(line, {
            scrollTrigger: {
                trigger: line,
                toggleActions: "restart resume reverse resume",
                start: "top bottom",
                end: "bottom center",
                scrub: true,
            },
            marginLeft: "100%",
            ease: "power1.inOut",
        });
    });
      
    gsap.from(".line_l",
        {scrollTrigger:{
            trigger: ".line_l",
  
            toggleActions: "restart resume reverse resume",
            start: "top center",
            end: "bottom 100px",
            scrub: true,
        },
        marginRight: "100%",
        ease:"power1.Out"
        }
    ) ;

    gsap.from(".player_l",
        {scrollTrigger:{
            trigger: ".player_l",
  
            toggleActions: "restart resume reverse resume",
            start: "top bottom",
            end: "bottom bottom",
            scrub: true,
        },left: "100%",
        ease:"power1.Out"
        }
    ) ;

    gsap.from(".img_x3",
        {scrollTrigger:{
            trigger: ".img_x3",
  
            toggleActions: "restart resume reverse resume",
            start: "top bottom",
            end: "bottom bottom",
            scrub: true,
        },
        left: "100%",
        ease:"power1.Out"
        }
    ) ;

    const form = document.querySelector("#form");
    const feedBack = document.querySelector("#feedback");

    function regForm(event){
        event.preventDefault();
        const thisform = event.currentTarget;
        const url = "adduser.php";
        const formdata =
        `email=${thisform.elements.email.value}&name=${thisform.elements.name.value}&topic=${thisform.elements.topic.value}&comments=${thisform.elements.comments.value}`;
        console.log(formdata);

        fetch(url,{
            method:"POST",
            headers: {
                "Content-type":"application/x-www-form-urlencoded"
            },
            body: formdata
        })
        .then(response => response.json())
        .then(response =>{
            console.log(response);
            feedBack.innerHTML = "";
            if (response.errors) {
                response.errors.forEach(error => {
                    const errorElement = document.createElement("p");
                    errorElement.textContent = error;
                    feedBack.appendChild(errorElement);
                })
            }
            else {
                form.reset();
                const messageElement = document.createElement("p");
                messageElement.textContent = response.message;
                feedBack.appendChild(messageElement);
            }
            feedBack.scrollIntoView({behavior: 'smooth', block:'end'})
        })
        .catch();
    }

    form.addEventListener("submit", regForm);

})();