
 
  

  
  // nav on scroll

  window.addEventListener("scroll",function(){
    var nav = document.querySelector('nav');
    nav.classList.toggle("sticky" , this.window.scrollY > 0);
  
  })

  // open cart 
  
  var open_cart = document.querySelector(".bx-menu");
  var open_close = document.querySelector(".bx-x");
  var ul_cart = document.querySelector("ul");
  
  
  open_cart.addEventListener("click", function(){
    ul_cart.classList.add('active');
    
  })
  
  open_close.addEventListener("click", function(){
    ul_cart.classList.remove('active');
  })
  
  
  /*
  // search on nav 
  var party = document.querySelector(".search");
  var open = document.getElementById("search-icon");
  var close =document.getElementById("close-search")
  
  open.addEventListener("click", function(){
    party.classList.add('active')
  })
  
  close.addEventListener("click", function(){
    party.classList.remove('active')
  })
  */
  
  
  // nav open class
  //----------------------------------------------1
  
  /*
  var p2 = document.querySelector('#a_1');
  var p1 = document.querySelector('.li1');
  p1.addEventListener("mouseover", function(){
  p2.classList.add('active')
  })
  
  p1.addEventListener("mouseout", function(){
  p2.classList.remove('active')
  })
  
  p2.addEventListener("mouseover", function(){
  p2.classList.add('active')     
  })
  
  p2.addEventListener("mouseout", function(){
  p2.classList.remove('active')
         
  })
  
  */
  
  //-----------------------------------------------2
  
  var pp2 = document.querySelector('#a_2');
  var pp1 = document.querySelector('.li2');
  pp2.addEventListener("toggle", function(){
  pp2.classList.add('active')
        
  })
  
  pp2.addEventListener("mouseout", function(){
    pp2.classList.remove('active')       
  })
  
  pp1.addEventListener("mouseover", function(){
  pp2.classList.add('active')
      
  })
  
  pp1.addEventListener("mouseout", function(){
   pp2.classList.remove('active')
       
   })
  
  //-----------------------------------------------3
   
  var ppp2 = document.querySelector('#a_3');
  var ppp1 = document.querySelector('.li3');
  ppp1.addEventListener("mouseover", function(){
  ppp2.classList.add('active')
       
  })
  
  ppp1.addEventListener("mouseout", function(){
  ppp2.classList.remove('active')
          
  })
  
  ppp2.addEventListener("mouseover", function(){
  ppp2.classList.add('active')
       
  })
  
  ppp2.addEventListener("mouseout", function(){
  ppp2.classList.remove('active')
          
  })
  
  
  // page2 product group slider
  
  const allbx = document.querySelectorAll('.page2-contient');
  const nxbtn = document.querySelectorAll('#sahm1');
  const prebtn = document.querySelectorAll('#sahm2');                     
  
  allbx.forEach((item,i)=>{
  let conn = item.getBoundingClientRect();
  let connwidth = conn.width;
  
  nxbtn[i].addEventListener('click' , () =>{
    item.scrollLeft +=300
  })
  
  prebtn[i].addEventListener('click' , () =>{
    item.scrollLeft -= 300
  })
  })
  
  
  
  
  
  
  // nav open class tell
  //-------------------------------------------------------------------------------------------------------------------1
  /*var lp2 = document.querySelector('#a_1');
  var lp1 = document.querySelectorAll('.bx-chevron-down')[0];
  lp1.addEventListener("click", function(){
    lp2.classList.toggle('active2')
  })
  */
  
  
  
  
  
  
  
  //-----------------------------------------------2
  
  var lpp2 = document.querySelector('#a_2');
  var lpp1 = document.querySelectorAll('.bx-chevron-down')[0];
  lpp1.addEventListener("click", function(){
    lpp2.classList.toggle('active2')
        
  })
  
  
  
  //-----------------------------------------------3
   
  var lppp2 = document.querySelector('#a_3');
  var lppp1 = document.querySelectorAll('.bx-chevron-down')[1];
  lppp1.addEventListener("click", function(){
    lppp2.classList.toggle('active3')
        
  })
  
  
  //-----------------------------------------------4
  /*
  var lpppp2 = document.querySelector('#a_4');
  var lpppp1 = document.querySelectorAll('.bx-chevron-down')[3];
  lpppp1.addEventListener("click", function(){
    lpppp2.classList.toggle('active2')
        
  })*/

  //-------------------------------- user party
  var option = document.querySelector('.option1');
  var user = document.querySelector('.bx-user');
  user.addEventListener('click',function(){
    option.classList.toggle('active');
  })
  
  
          
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  