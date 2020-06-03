
//obtener elementos del inicio de sesion
const usuario = document.getElementById("usuario");
const   email = document.getElementById("email");
const password = document.getElementById("password");
const form = document.getElementById("form");
const validacion = document.getElementById("validacion");

form.addEventListener("submit", validarCampo => {
    
    let mensaje="";
    let enviar=false;
    if (usuario.value.length <1){
        mensaje += `Ingrese un usuario </br>`;
        enviar=true;
    }

    if (email.value.length <1){
        mensaje += `Ingrese un correo electronico </br>`;
        enviar=true;
    }

    if (password.value.length <8){
        mensaje += `La contraseña es demasiado corta </br>`;
        enviar=true;
    }

    if (enviar){
        validacion.innerHTML=mensaje;
        mensaje="";
        validarCampo.preventDefault()
    }
    else {
        
        alert("ENVIADO");
    }
})

var name, solution, cantidad, precio;


document.getElementById("enviar").onclick = function click2(){
    name = document.getElementById("name").value;
    solucion = document.getElementById("solucion").value;
    cantidad = parseInt(document.getElementById("cantidad").value,10);

    switch(solucion) {
        case 'Pagina Web': precio=600000;
            break;
        case 'E-comerce': precio=1300000;
            break;
        case 'Plataforma educativa': precio=6000000;
            break;
        case 'Aplicacion móvil': precio=2000000;
            break;
        case 'Campaña de Marketing': precio=1000000;
            break;
        case 'Administración de sitios': precio=3000000;
    }

    alert("Hola "+ name + ", los servicios que requiere tienen un valor aproximado de $" + (precio*cantidad));
    

}



