//Validacion generica
const validarFormulariox = (x) => {
	//Obtengo el step x
	const formulariox=document.getElementById(`step${x}`);
	console.log(inputs);
	//Obtengo todos los inputs que hay en el step x
	const inputs=document.querySelectorAll(`#step${x} input`); 
	//Obtengo todos los selects que hay en el step x
	const selects=document.querySelectorAll(`#step${x} select`); 
	console.log(selects);

}