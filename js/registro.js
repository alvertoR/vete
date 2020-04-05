window.addEventListener("load", function(e){
    document.querySelector('#bSend').addEventListener("click",function(e){
        newProp();
    });
});

function newProp(){
    var nameForm = document.querySelector('#name');
    var ccForm = document.querySelector('#cc');
    var profForm = document.querySelector('#prof');
    var adressForm = document.querySelector('#adress');
    var emailForm = document.querySelector('#email');
    
    var header = "name=" + nameForm.value + "&cc=" + ccForm.value + "&prof=" + profForm.value + "&adress=" + adressForm.value + "&email=" + emailForm.value;

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //Envío correcto
            console.log('In King...');

        }
    }

    //Configuración del envío de los valores
    xmlhttp.open("POST","../../includes/newPropietario.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(header);
}


