window.onload = function () {

    let check = document.querySelector("#check");
    let botonSig = document.querySelector("#btnSiguiente");
    let botonLimpiar = document.querySelector("#btnLimpiar");
    let botonLimpiar2 = document.querySelector("#btnLimpiar2");

    check.addEventListener("change", function (){
        if(check.checked){
            botonSig.disabled = false;
        }else{
            botonSig.disabled = true;
        }
    });

    botonLimpiar.addEventListener("click", function (){
        document.querySelector("#dni").textContent = "";
        document.querySelector("#telefono").textContent = "";
        document.querySelector("#email").textContent = "";
        document.querySelector("#email2").textContent = "";
    });

    botonLimpiar2.addEventListener("click", function (){
        document.querySelector("#nombre").textContent = "";
        document.querySelector("#apellido1").textContent = "";
        document.querySelector("#apellido2").textContent = "";
        document.querySelector("#edad").textContent = "";
    });

}