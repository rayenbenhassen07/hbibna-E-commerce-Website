/*---------------------------------------search----------------------------------------*/

function search(){
    const searchbox = document.getElementById("search-saisie").value.toUpperCase();
    const productlist = document.getElementById("featured-contient");
    const product = document.querySelectorAll(".box"); 
  
    for (var i=0 ;i< product.length; i++){
      let match = product[i].getElementsByTagName("h5")[0];
  
      if(match){
        let textvalue = match.textContent || match.innerHTML
        if(textvalue.toUpperCase().indexOf(searchbox) > -1){
          product[i].style.display="";
        } else{
          product[i].style.display="none";
        }
      }
    }
  }