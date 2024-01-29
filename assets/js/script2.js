/*-------------------------------menu------------------------------- */



/*-------------------------------image------------------------------- */





/*-------------------------------select button------------------------------- */
// toggle size buttom

const si = document.querySelectorAll('.size-radio');
let x = 0;

si.forEach((item, i) => {
  item.addEventListener('click', () => {
    si[x].classList.remove('check');
    item.classList.add('check');
    x = i;
  })
})
/*-------------------------------flesh des quantity up and down------------------------------- */

function addquanty(){
  document.getElementsByClassName("quantityy")[0].value=parseInt(document.getElementsByClassName("quantityy")[0].value)+1;
  testquan(document.getElementsByClassName("quantityy")[0].value);
}

function sousquanty(){
  document.getElementsByClassName("quantityy")[0].value=parseInt(document.getElementsByClassName("quantityy")[0].value)-1;
  testquan(document.getElementsByClassName("quantityy")[0].value);
}

function testquan(a){
  if(parseInt(a)<=0){
    document.getElementsByClassName("quantityy")[0].value=1;
  }
}

