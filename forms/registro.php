<!--STEP 2-->
<!--inicio container principal-->
<div class="container-fluid vh-100 " id="body">
<!--inicio fila-->
<div class='row'>
<?php
include 'form.php';
?>
<!--Navbar vertical-->
    <div class="menu__side" id="menu_side">
    <a href="#" class="selected">
        <div class="name__page">
        <i class="fas fa-bars" id="btn_open"></i>
        </div>
        </a>
        <div class="options__menu">	

            <a href="#" class="selected">
                <div class="option">
                    <i class="fa fa-circle-o" aria-hidden="true" title="Step 1"></i>
                    <h4>Step 1</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa fa-circle-o" aria-hidden="true" title="Step 2"></i>
                    <h4>Step 2</h4>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fa fa-circle-o" aria-hidden="true"title="Step 3"></i>
                    <h4>Step 3</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa fa-circle-o" aria-hidden="true" title="Step 4"></i>
                    <h4>Step 4</h4>
                </div>
            </a>


        </div>
</div>
    </div>
<!--fin navbar vertical-->

<?php
//Llamo a la libreria de forms
$form=new Form();
//Inicio columna contenedora step 1
echo $form->createCol("step1"," d-flex justify-content-center align-items-center vh-100",
//Inicio columna contenedora de inputs
$form->createCol("","-8",

//Inicio contenedor step
$form->createStepper("","",
$form->createStepperItem(""," completed","1",null).
$form->createStepperItem("","","2",null).
$form->createStepperItem("","","3",null).
$form->createStepperItem("","","4",null).
$form->createStepperItem("","","5",null)
,"",null).
//fin contenedor step
//Inicio fila contenedora de inputs
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
//Inicio columna contenedora de input
$form->createCol("grupo__nombre"," mb-3 ms-3",
$form->createRow(""," formulario__grupo-input",
$form->createInput("Nombre","nombre","txt","","","",null).
$form->createIcon("","formulario__validacion-estado fas fa-times-circle","",null),
null).
//parrafo que aparece cuando hay algún error
$form->createP("","formulario__input-error","El nombre debe contener de 1 a 16 letras.",null)
).
//Fin columna contenedora de input
//Inicio columna contenedora de input
$form->createCol("grupo__apellido"," mb-3 ms-3",
$form->createRow(""," formulario__grupo-input",
$form->createInput("Apellido","apellido","txt","","","",null).
$form->createIcon("","formulario__validacion-estado fas fa-times-circle","",null),
null).
//parrafo que aparece cuando hay algún error
$form->createP("","formulario__input-error","El apellido debe contener de 1 a 16 letras.",null)
),
//Fin columna contenedora de input
null).
//fin fila contenedora de inputs
//Inicio fila contenedora de inputs
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
//Inicio columna contenedora de input
$form->createCol("grupo__nacionalidad"," mb-3 ms-3",
$form->createRow(""," formulario__grupo-input",
$form->createInput("Nacionalidad","nacionalidad","txt","","","",null).
$form->createIcon("","formulario__validacion-estado fas fa-times-circle","",null),
null).
//parrafo que aparece cuando hay algún error
$form->createP("","formulario__input-error","La nacionalidad tiene que ser de 4 a 16 letras.",null)
).
//Fin columna contenedora de input
//Inicio columna contenedora de input
$form->createCol("grupo__fecha"," mb-3 ms-3",
$form->createRow(""," formulario__grupo-input",
$form->createInput("Fecha de nacimiento","fecha","date","","","",null).
$form->createIcon("","formulario__validacion-estado fas fa-times-circle","",null),
null).
//parrafo que aparece cuando hay algún error
$form->createP("","formulario__input-error","Debe seleccionar una fecha.",null),
),
//Fin columna contenedora de input
null).
//Fin fila contenedora de inputs
//Inicio fila contenedora de inputs
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","#step2","",$form->createButton("Siguiente","btnSiguiente","button","btn btn-primary",null),null),
 null)

,null)
  
,null)
//Fin columna contenedora de inputs
,null)
//Fin columna contenedora
?>



</div>
<?php
$form=new Form();
//Inicio columna contenedora step 2
echo $form->createCol("step2"," d-flex justify-content-center align-items-center vh-100",
//Inicio columna contenedora de inputs
$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," completed","1",null).
$form->createStepperItem(""," completed","2",null).
$form->createStepperItem("","","3",null).
$form->createStepperItem("","","4",null).
$form->createStepperItem("","","5",null)
,"",null).
//Inicio fila contenedora de inputs
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
//Inicio columna contenedora de input
$form->createCol("grupo_-provincia"," mb-3 ms-3",
$form->createSelect("Provincia","provincia","","",["Neuquén","Río Negro","Mendoza","La Pampa","Chubut"],null)
).
//Fin columna contenedora de input
//Inicio columna contenedora de input
$form->createCol("grupo_-localidad"," mb-3 ms-3",
$form->createSelect("Localidad","localidad","","",["Neuquén","Chos malal","Aluminé","Andacollo","Añelo"],null)
),
//Fin columna contenedora de input
null).
//Fin fila contenedora de inputs
//Inicio fila contenedora de inputs
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
//Inicio columna contenedora de input
$form->createCol(""," mb-3 ms-3",$form->createInput("Codigo postal","inputCodigoPostal","number","","","",null)
).
//Fin columna contenedora de input
//Inicio columna contenedora de input
$form->createCol(""," mb-3 ms-3",$form->createInput("Domicilio","inputDomicilio","txt","","","",null)
),
//Fin columna contenedora de input
null).
//Fin fila contenedora de inputs
//Inicio columna contenedora de input
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","#step1","",
$form->createButton("Anterior","btnAnterior","button","btn btn-primary me-3",null),
null).
$form->createLink("","#step3","",
$form->createButton("Siguiente","btnSiguiente","button","btn btn-primary ms-3",null),
null),
 null)

,null)

,null)

,null).

//Inicio columna contenedora step 3
$form->createCol("step3"," d-flex justify-content-center align-items-center vh-100",
//Inicio columna contenedora de inputs
$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," completed","1",null).
$form->createStepperItem(""," completed","2",null).
$form->createStepperItem(""," completed","3",null).
$form->createStepperItem("","","4",null).
$form->createStepperItem("","","5",null)
,"",null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Telefono","inputTelefono","number","","","",null)
).
//Fin columna contenedora de input
$form->createCol(""," mb-3 ms-3",$form->createInput("Email","inputEmail","email","","","",null)
),
//Fin columna contenedora de input
null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
//Inicio columna contenedora de input
$form->createCol(""," mb-3 ms-3",$form->createInput("Nivel de estudios","inputEstudios","txt","","","",null)
).
//Fin columna contenedora de input
//Inicio columna contenedora de input
$form->createCol(""," mb-3 ms-3",$form->createInput("Estado","inputEstado","txt","","","",null)
),
//Fin columna contenedora de input
null).
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","#step2","",
$form->createButton("Anterior","btnAnterior","button","btn btn-primary me-3",null),
null).
$form->createLink("","#step4","",
$form->createButton("Finalizar","btnFinalizar","button","btn btn-primary ms-3",null),
null),
 null)

,null)

,null)


,null)


//Fin container principal


?>
</div>