let menuicon=document.querySelector("#menu");
let navbar=document.querySelector(".menu");
let close=document.querySelector('#close');
menu.addEventListener('click',function(){
    navbar.classList.add('active');
});
close.addEventListener('click',function(){
    navbar.classList.remove('active');
});