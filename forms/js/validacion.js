const esLetra = (caracter) => {
    let ascii = caracter.toUpperCase().charCodeAt(0);
    return ascii > 64 && ascii < 91;
};
function validarFormulario3(evento) {
    evento.preventDefault();
    var usuario = document.getElementById('usuario').value;
    if(usuario.length == 0) {
      alert('No has escrito nada en el usuario');
      return;
    }
    var dominio = document.getElementById('txt_dominio').value;
    if (clave.length ==0) {
        alert('No has escrito nada en el dominio'); 
      return;
    }else if(clave.length<7 || clave.length>9 ){
        alert('El dominio no es válido');
        return;
    }else if (clave.length==7 ){
    var valor=true;
    var i=0;
        // Probar
        while(valor==true&&i<3){
            valor=esLetra(dominio[i]);
            i++;
        }
        if(valor==true&&dominio[i]=="-"){
            i++;
            while(valor==true&&i<7){
                valor=esLetra(dominio[i]);
                i++;
            }
            if(valor!=true){
                alert('El dominio no es válido');
            }
        }else{
            valor=false;
            alert('El dominio no es válido');
        }
        return;
    }else if(clave.length==8){
        var valor=true;
        var i=0;
            // Probar
            while(valor==true&&i<2){
                valor=esLetra(dominio[i]);
                i++;
            }
            if(valor==true&&dominio[i]=="-"){
                i++;
                while(valor==true&&i<6){
                    valor=esLetra(dominio[i]);
                    i++;
                }
                if(valor==true&&dominio[i]=="-"){
                    i++;
                    while(valor==true&&i<8){
                        valor=esLetra(dominio[i]);
                        i++;
                    }
                    if(valor!=true){
                        alert('El dominio no es válido');
                    }
                }
            }else{
                valor=false;
                alert('El dominio no es válido');
            }
    }
}
const campos = {
	usuario: false,
	nombre: false,
	nacionalidad,
	password: false,
	correo: false,
	telefono: false,
	fecha: false,

}
const formulario = document.getElementById('step1');
const inputs=document.querySelectorAll(`#step1 input`); 
console.log(inputs);

const expresiones={
    //usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,16}$/, // Letras y espacios, pueden llevar acentos.
	//password: /^.{4,12}$/, // 4 a 12 digitos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	nacionalidad: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    domicilio: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
    codigopostal: /^[0-9\s]{4,7}$/
}

const validarFormulario = (e) => {

	switch (e.target.name) {
   
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido');
		break;
		case "nacionalidad":
			validarCampo(expresiones.apellido, e.target, 'nacionalidad');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}
const validarFormulario1 = (e) => {
	switch (e.target.name) {
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
		break;
		case "password2":
			validarPassword2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {

	if(expresion.test(input.value)){

		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle')	
		document.querySelector(`#grupo__${campo} .formulario__input-error`).style.visibility = "hidden";
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).style.visibility = "visible";
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});


formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(campos.usuario && campos.nombre && campos.nacionalidad&& campos.fecha && terminos.checked ){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});