window.addEventListener("load", function(e){
    document.querySelector('#bShearch').addEventListener("click", function(e){
        getProp();
    });

    function getProp(){
        

        var divShow = document.querySelector('#mostrar'); 
        var ccForm = document.querySelector('#cc1');
        var header = "cc=" + ccForm.value;
        
        var xmlhttp = new XMLHttpRequest();
        

        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                divShow.innerHTML = this.responseText;
            }
        }

        //Configuración del envío de los valores
        xmlhttp.open("POST","../../includes/infoProp.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(header);
    }

});

