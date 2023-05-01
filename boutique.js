// Demande d'autorisation des cookies
var body = document.getElementsByTagName('body')[0];
var divcookie = document.querySelector('div.cookie');
var accepter = document.querySelector('input.acceptercookie');
var refuser = document.querySelector('input.refusercookie');

    setTimeout(divcookieS, 1500)
    function divcookieS(){
        divcookie.style.display = 'block';
    }
// l'utilisateur accepte les cookies
    accepter.addEventListener('click', autoriser)
    function autoriser(){
        divcookie.style.display = 'none';
    }
// l'utilisateur refuse les cookies
    refuser.addEventListener('click', décliner)
    function décliner(){
        divcookie.style.display = 'none';
        body.classList.add('blur');
    }




//---------------------//---------------------//

// Barre de recherche apparaît/disparaît avec un click sur le bouton 
var bouton = document.querySelector('input.loupe');
var barre = document.querySelector('input.Brecherche');

    
    bouton.addEventListener('click', function(){  
    
        barre.classList.toggle('rechercheA');
        bouton.classList.toggle('deplace');

    }); 


// var bouton2 =  document.querySelector('input.loupe');
//     bouton2.addEventListener('click', cacher)
//     function cacher(){
//         barre.style.display = 'none';
//     }



//---------------------//---------------------//

// Changement d'images mouseover pour les animaux
//premier chien
var chien1 = document.querySelector("img.chien1")

chien1.addEventListener ("mouseover", remplace)
function remplace(){
    chien1.setAttribute("src", "Images/animaux/beagle.jpg")
}
chien1.addEventListener("mouseout", come)
function come() {
    chien1.setAttribute("src","Images/animaux/chien1.jpg")
}

// chien 2
var chien2 = document.querySelector("img.chien2")

chien2.addEventListener ("mouseover", change)
function change(){
    chien2.setAttribute("src", "Images/animaux/labrador2.jpg")
}
chien2.addEventListener("mouseout", revient)
function revient() {
    chien2.setAttribute("src","Images/animaux/chien2.jpg")
}

// chaton
var chat = document.querySelector("img.chat")

chat.addEventListener ("mouseover", pars)
function pars(){
    chat.setAttribute("src", "Images/animaux/chat2.avif")
}
chat.addEventListener("mouseout", back)
function back() {
    chat.setAttribute("src","Images/animaux/chat.jpg")
}



