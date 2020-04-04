console.log('hola');

var btnRegistro = document.querySelector('#registrar');
var btnBuscar   = document.querySelector('#buscar');

var divRegistrar = document.querySelector('#registro');
var divBusca     = document.querySelector('#busca');

btnRegistro.addEventListener('click', getHtml);
btnBuscar.addEventListener('click', getHtmlBusca);

function getHtml(e){

    e.preventDefault();
    
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.status === 200){
            divRegistrar.innerHTML = xhr.responseText;
        }
    }
    xhr.open("get", "../registro/registrar.php", true);
    xhr.send(); 
    divRegistrar.style.display = "block";
    divBusca.style.display = "none";   
}

function getHtmlBusca(e){

    e.preventDefault();
    
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.status === 200){
            divBusca.innerHTML = xhr.responseText;
        }
    }
    xhr.open("get", "../registro/buscar.php", true);
    xhr.send();
    divBusca.style.display = "block"; 
    divRegistrar.style.display = "none";
}