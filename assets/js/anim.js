// page 3 

let image = document.querySelector(".page3_img");
let text = document.querySelector(".page3_content_content");

window.onscroll = function (){
    if(window.scrollY >= image.offsetTop - 800){
        image.classList.add("active");
        text.classList.add("active");
    }  
 
 }

// page final 

let final = document.querySelector(".finaly");
window.onscroll = function (){
    if(window.scrollY >= final.offsetTop - 800){
        final.classList.add("active");
    }  
 
 }

