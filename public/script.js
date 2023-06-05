// 🤬 POUR LE MOMENT L'HISTORIQUE EST STATIQUE JE VAIS LE RENDRE DYNAMIQUE AVEC JSON 
// JE VIENS DE MODIFIER LE CODE TOUT ENTIER POUR QUE ME RETROUVE 
let body = document.documentElement;
let menu = document.querySelector('.menu-box');
let historiquePop = document.querySelector('.historique-pop');
let menuBtn = document.querySelector('.menu-btn');
let popBtn = document.querySelector('.bx-dots-vertical-rounded');
let themeBtn = document.querySelector(".bx-moon");

// script du menu 
menuBtn.addEventListener('click',() =>{
    menu.classList.toggle("active-menu");
})
// POP-UP DE PARAMETRE DANS HISTORIQUE 
popBtn.addEventListener('click',() =>{
    historiquePop.classList.toggle("active-pop");
})
// POP-UP DE PARAMETRE DANS HISTORIQUE 
// script du menu 
// DARK MODE SCRIPT 
themeBtn.addEventListener("click",()=>{
    body.classList.toggle("dark");
    themeBtn.classList.toggle("bx-sun")
})
// DARK MODE SCRIPT 