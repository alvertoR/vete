window.addEventListener("load",function(e){
    
       
    var btnRegistro = document.querySelector('#registrar');
    var btnBuscar   = document.querySelector('#buscar');
    
    var divRegistrar = document.querySelector('#registro');
    var divBusca     = document.querySelector('#busca');
    
    divRegistrar.style.display = "none";
    divBusca.style.display = "none"; 

    btnRegistro.addEventListener('click', getHtml);
    btnBuscar.addEventListener('click', getHtmlBusca);

    function getHtml(e){
        e.preventDefault();
            
        divRegistrar.style.display = "block";
        divBusca.style.display = "none"; 
    }
    
    function getHtmlBusca(e){
        e.preventDefault();
           
        divBusca.style.display = "block";
        divRegistrar.style.display = "none"; 
    }

});


