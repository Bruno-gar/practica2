
function validarTexto(valor){
    var valorinput = valor.value;
    var id_input = valor.id;
    if (valorinput == ""){
        document.getElementById(id_input).placeholder = "Ingrese "+ id_input;
        document.getElementById(id_input).style.border= "1px solid red";
    }else{
        document.getElementById(id_input).style.border= "";
    }
}

function validarNumeros(valor){
    var valorinput = valor.value;
    var id_input = valor.id;
    if (valorinput == "" || typeof valorinput == 'number'){
        document.getElementById(id_input).placeholder = "Ingrese "+ id_input;
        document.getElementById(id_input).style.border= "1px solid red";
    }else{
        document.getElementById(id_input).style.border= "";
    }
}

function validarFechas(valor){
    var fechainput = valor.value;
    var id_input = valor.id;
    var fechahoy = new Date();
    var cadenafecha = new Date(fechahoy.getTime() - (fechahoy.getTimezoneOffset()*60000))
                        .toISOString() /* cambio el formato de la fecha */
                        .split("T")[0]; /* le saco el tiempo y dejo solo YYYY/MM/DD */

    if(fechainput < cadenafecha){
        document.getElementById(id_input).style.border= "1px solid red";
    }else{
        document.getElementById(id_input).style.border= "";
    }
}
