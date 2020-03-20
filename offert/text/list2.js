

var btn=document.getElementById("btn-click");

function funcct(){
    btn.style.backgroundColor = "green";
}
function funcct1(){
    btn.style.backgroundColor="white";
}

btn.addEventListener('mouseover',funcct);
btn.addEventListener('mouseout',funcct1);