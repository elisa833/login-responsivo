const validar = () => {
    //formularios, construye uno de nuevo
    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;

    let datos = new FormData();
    
    datos.append("nombre", nombre);
    datos.append("apellido", apellido);
    datos.append("email", email);
    datos.append("pass", pass);
    
    fetch("app/controller/registro.php",{
        //vamos a pasar dato por metodo post
        method:"POST",
        body:datos
    }).then(respuesta => respuesta.json())
        .then(respuesta => {            
            if (respuesta[0] == 1) {
                alert(respuesta[1]);
                window.location="login.php";
            } else{
                alert(respuesta[1]);
            }
            
        })   
}

document.getElementById("btn-registro").addEventListener("click",()=>{
    validar();
});

//$('#btn_saludar').on('click',() => {
 //   enviar_datos();

//});



//error 200 todo bien o 500 error de servidor 0 404 error de archivo no encontrado