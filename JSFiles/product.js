let mainimge=document.getElementById('main');
let smallimg=document.getElementsByClassName('small-img');
console.log(smallimg);

smallimg[0].addEventListener("click",function(){
    mainimge.src=smallimg[0].src;
});
smallimg[1].addEventListener("click",function(){
    mainimge.src=smallimg[1].src;
});
smallimg[2].addEventListener("click",function(){
    mainimge.src=smallimg[2].src;
});