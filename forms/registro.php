<!--STEP 2-->
<!--inicio container-->
<div class="container-fluid vh-100 " id="body">
<!--inicio fila-->
<div class='row'>
<?php
include 'form.php';
?>

    <div class="menu__side" id="menu_side">
    <a href="#" class="selected">
        <div class="name__page">
        <i class="fas fa-bars" id="btn_open"></i>
        </div>
        </a>
        <div class="options__menu">	

            <a href="#" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>Portafolio</h4>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Cursos"></i>
                    <h4>Cursos</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>Blog</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <h4>Nosotros</h4>
                </div>
            </a>

        </div>
</div>
    </div>
<!--fin row-->

<?php
$form=new Form();

echo $form->createCol("step1"," d-flex justify-content-center align-items-center vh-100",

$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," active","1",null).
$form->createStepperItem("","","2",null).
$form->createStepperItem("","","3",null).
$form->createStepperItem("","","4",null).
$form->createStepperItem("","","5",null)
,"",null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createCol(""," mb-3 ms-3",
$form->createRow("grupo__nombre"," formulario__grupo-input",
$form->createInput("Nombre","nombre","txt","","","",null).
$form->createIcon("","formulario__validacion-estado fas fa-times-circle","",null),
null).
$form->createP("","formulario__input-error","El nombre tiene que ser de 4 a 16 dígitos y solo puede contener letras.",null)
).

$form->createCol(""," mb-3 ms-3",
$form->createRow("grupo__apellido"," formulario__grupo-input",
$form->createInput("Apellido","apellido","txt","","","",null).
$form->createIcon("","formulario__validacion-estado fas fa-times-circle","",null),
null).
$form->createP("","formulario__input-error","El apellido tiene que ser de 4 a 16 dígitos y solo puede contener letras.",null)
),

null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",
$form->createRow("grupo__nacionalidad"," formulario__grupo-input",
$form->createInput("Nacionalidad","nacionalidad","txt","","","",null).
$form->createIcon("","formulario__validacion-estado fas fa-times-circle","",null).
$form->createP("","formulario__input-error","La nacionalidad tiene que ser de 4 a 16 dígitos y solo puede contener letras.",null),
null)
).

$form->createCol(""," mb-3 ms-3",
$form->createRow(""," formulario__grupo-input",
$form->createInput("Fecha de nacimiento","fecha","date","","","",null).
$form->createIcon("","formulario__validacion-estado fas fa-times-circle","",null).
$form->createP("","formulario__input-error","Debe seleccionar una fecha.",null),
null)
),

null).
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","#step2","",$form->createButton("Siguiente","btnSiguiente","button","btn btn-primary",null),null),
 null)

,null)

,null)


,null)







?>



</div>
<?php
$form=new Form();

echo $form->createCol("step2"," d-flex justify-content-center align-items-center vh-100",

$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," completed","1",null).
$form->createStepperItem(""," active","2",null).
$form->createStepperItem("","","3",null).
$form->createStepperItem("","","4",null).
$form->createStepperItem("","","5",null)
,"",null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createSelect("Provincia","selectProvincia","","",["Neuquén","Río Negro","Mendoza","La Pampa","Chubut"],null)).

$form->createCol(""," mb-3 ms-3",$form->createSelect("Ciudad","selectCiudad","","",["Neuquén","Chos malal","Aluminé","Andacollo","Añelo"],null)),
null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Codigo postal","inputCodigoPostal","number","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Domicilio","inputDomicilio","txt","","","",null)),
null).
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


$form->createCol("step3"," d-flex justify-content-center align-items-center vh-100",

$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," completed","1",null).
$form->createStepperItem(""," completed","2",null).
$form->createStepperItem(""," active","3",null).
$form->createStepperItem("","","4",null).
$form->createStepperItem("","","5",null)
,"",null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Telefono","inputTelefono","number","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Email","inputEmail","email","","","",null)),
null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nivel de estudios","inputEstudios","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Estado","inputEstado","txt","","","",null)),
null).
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","#step2","",
$form->createButton("Anterior","btnAnterior","button","btn btn-primary me-3",null),
null).
$form->createLink("","#step4","",
$form->createButton("Siguiente","btnSiguiente","button","btn btn-primary ms-3",null),
null),
 null)

,null)

,null)


,null).

$form->createCol("step4"," d-flex justify-content-center align-items-center vh-100",

$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," completed","1",null).
$form->createStepperItem(""," completed","2",null).
$form->createStepperItem(""," completed","3",null).
$form->createStepperItem(""," active","4",null).
$form->createStepperItem("","","5",null)
,"",null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nombre","txtNombre","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Apellido","textApellido","txt","","","",null)),
null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nacionalidad","txtNombre","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Fecha de nacimiento","date","date","","","",null)),
null).
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","step2","",$form->createButton("Siguiente","btnSiguiente","button","btn btn-primary",null),null),
 null)

,null)

,null)


,null).


$form->createCol("step5"," d-flex justify-content-center align-items-center vh-100",

$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," completed","1",null).
$form->createStepperItem(""," completed","2",null).
$form->createStepperItem(""," completed","3",null).
$form->createStepperItem(""," completed","4",null).
$form->createStepperItem(""," active","5",null)
,"",null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nombre","txtNombre","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Apellido","textApellido","txt","","","",null)),
null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nacionalidad","txtNombre","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Fecha de nacimiento","date","date","","","",null)),
null).
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","step2","",$form->createButton("Siguiente","btnSiguiente","button","btn btn-primary",null),null),
 null)

,null)

,null)


,null).

$form->createCol("step6"," d-flex justify-content-center align-items-center vh-100",

$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," active","1",null).
$form->createStepperItem("","","2",null).
$form->createStepperItem("","","3",null).
$form->createStepperItem("","","4",null).
$form->createStepperItem("","","5",null)
,"",null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nombre","txtNombre","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Apellido","textApellido","txt","","","",null)),
null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nacionalidad","txtNombre","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Fecha de nacimiento","date","date","","","",null)),
null).
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","step2","",$form->createButton("Siguiente","btnSiguiente","button","btn btn-primary",null),null),
 null)

,null)

,null)


,null).


$form->createCol("step7"," d-flex justify-content-center align-items-center vh-100",

$form->createCol("","-8",

$form->createStepper("","",
$form->createStepperItem(""," active","1",null).
$form->createStepperItem("","","2",null).
$form->createStepperItem("","","3",null).
$form->createStepperItem("","","4",null).
$form->createStepperItem("","","5",null)
,"",null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nombre","txtNombre","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Apellido","textApellido","txt","","","",null)),
null).

$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",
$form->createCol(""," mb-3 ms-3",$form->createInput("Nacionalidad","txtNombre","txt","","","",null)).
$form->createCol(""," mb-3 ms-3",$form->createInput("Fecha de nacimiento","date","date","","","",null)),
null).
$form->createRow(""," mb-4 ms-4 justify-content-center align-items-center",

$form->createDiv("","d-flex justify-content-center align-items-center  mb-3",
$form->createLink("","step2","",$form->createButton("Siguiente","btnSiguiente","button","btn btn-primary",null),null),
 null)

,null)

,null)


,null)





?>
</div>