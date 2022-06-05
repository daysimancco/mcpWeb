//primero declarar las varinles donde se llamaran los Id
var imagen= document.getElementById('rotaciones'),
    prev = document.getElementById('antes'),
    next = document.getElementById('siguiente'),
    url_imagenes= '../imagenes/';
var cantidad=3,posicion=1;

//relaizacion de manipulacion
prev.addEventListener('click',function(){
    posicion--;
    if(posicion<1)
    posicion=3;
    imagen.src=url_imagenes+posicion+ '.png';
})
next.addEventListener('click',function(){
    posicion++;
    if(posicion>3)
    posicion=1;
    imagen.src=url_imagenes+posicion+ '.png';
})
setInterval(function(){
    next.click();
},4000)

