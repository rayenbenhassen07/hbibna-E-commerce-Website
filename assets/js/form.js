
b=''

var cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray') || '[]');
for (var i = 0; i < cartItemsArray.length; i++) {
    var product = cartItemsArray[i];
    b=b+product.title+' - '+product.price+' - '+product.quantity+' | ' ;
    document.getElementsByClassName('inputpro')[0].innerHTML=b
}


/*----------------------------UPDATE TOTAL------------------------------------*/ 
var cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray') || '[]');
var s=0;
for (var i = 0; i < cartItemsArray.length; i++) {
  var product = cartItemsArray[i];
  s=s+parseInt(product.quantity)*parseInt(product.price);
  s = Math.round(s *100) /100;
}


var k=parseInt(s)+7;
q=document.getElementsByClassName('pluslivto')[0].innerHTML=s+0+'dt';
document.getElementsByClassName('prixx')[0].innerHTML=q;


// contrainte

var prenomInput = document.getElementById('prenom');
var nomInput = document.getElementById('nom');

prenomInput.addEventListener('input', function () {
    if (prenomInput.value.length < 2) {
        prenomInput.setCustomValidity('Le prénom doit comporter au moins 2 caractères.');
    } else {
        prenomInput.setCustomValidity('');
    }
});

nomInput.addEventListener('input', function () {
    if (nomInput.value.length < 2) {
        nomInput.setCustomValidity('Le nom doit comporter au moins 2 caractères.');
    } else {
        nomInput.setCustomValidity('');
    }
});

//---------------------------------------------------------------------------------
var emailInput = document.getElementById('email');

emailInput.addEventListener('input', function () {
    var email = emailInput.value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (!emailPattern.test(email) && email.length > 0) {
        emailInput.setCustomValidity('Veuillez saisir une adresse email valide.');
    } else {
        emailInput.setCustomValidity('');
    }
});

//---------------------------------------------------------------------------------


var telInput = document.getElementById('tel');

telInput.addEventListener('input', function () {
    var phoneNumber = telInput.value;
    var phonePattern = /^\d{8}$/;

    if (!phonePattern.test(phoneNumber) && phoneNumber.length > 0) {
        telInput.setCustomValidity('Le numéro de téléphone doit comporter 8 chiffres.');
    } else {
        telInput.setCustomValidity('');
    }
});


//---------------------------------------------------------------------------------







