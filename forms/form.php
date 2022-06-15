<?php
/*
Element:

Esta clase contiene metodos con los cuales se pueden crear elementos html 
a partir de parametros como id, class, etc.
*/

class Form{

    //Form
    public function createForm(string $class,string $action,string $method,string $content){
        $output = "<form class='".$class."' "."action='".$action."' method='".$method."'>".$content."</form>";

        return $output;
    }
    //Grid
    public function createGrid(int $x, int $y,Array $names,Array $types,Array $ids){
        $output="";
        $z=0;
        for ($i=0;$i<$x;$i++){
            
            $output.="<div class='row  align-items-center mb-3'>";
            
            for($j=0;$j<$y;$j++){
                 
                $type=$types[$z+$j];
                $id=$ids[$z+$j];
                $name=$names[$z+$j];

                $output.="<div class='col mb-3 ms-3 me-3'>
                <label class='form-label' for='autoSizingInput'>".$name."</label>
                <input type='".$type."' class='form-control' id='".$id.$j."' placeholder=''>
                </div>";

            }
             $z=$j;
            $output.="</div>";

        };

        return $output;
    }
    //Div
    public function createDiv(string $id,string $class,string $content,string $additional = null){
        $output = "<div id='".$id."' class='".$class."' ".$additional.">".$content."</div>";

        return $output;
    }

    //Nav
    public function createNav(string $id,string $class,string $content,string $additional = null){
        $output = "<nav id='".$id."' class='".$class."' ".$additional.">".$content."</nav>";

        return $output;
    }

    //Span
    public function createSpan(string $id,string $class,string $content,string $additional = null){
        $output = "<span id='".$id."' class='".$class."' ".$additional.">".$content."</span>";

        return $output;
    }

    //Ul
    public function createUl(string $id,string $class,string $content,string $additional = null){
        $output = "<ul id='".$id."' class='".$class."' ".$additional.">".$content."</ul>";

        return $output;
    }

    //Li
    public function createLi(string $id,string $class,string $content,string $additional = null){
        $output = "<li id='".$id."' class='".$class."' ".$additional.">".$content."</li>";

        return $output;
    }

    //Label
    public function createLabel(string $label,string $idInput,string $class,string $additional = null){
        $output = "<label for='".$idInput."' class='form-label ".$class."' ".$additional.">".$label."</label>";

        return $output;
    }

    //Small
    public function createSmall(string $content,string $idSmall,string $class,string $additional = null){
        $output = "<small id='".$idSmall."' class='form-label ".$class."' ".$additional.">".$content."</small>";

        return $output;
    }

    //Input
    public function createInput(string $label,string $idInput,string $type,string $class,string $placeholder,string $value,string $additional = null){
        $output = "";

        if($label!=""){
            $output .= $this->createLabel($label,$idInput,"");
        }

        $output .= "<input type='".$type."' id='".$idInput."' name='".$idInput."' class='form-control ".$class."' placeholder='".$placeholder."' value='".$value."' ".$additional."/>";

        return $output;
    }
/*
    //Input-group
    public function createInputGroup(string $label,string $idInput,string $type,string $class,string $placeholder,string $value,string $beforeInput,string $afterInput,string $additional = null){
        $output = "";

        if($label!=""){
            $output .= $this->createLabel($label,$idInput,"");
        }

        if($beforeInput!=""){

        }

        $output .= "<input type='".$type."' id='".$idInput."' name='".$idInput."' class='form-control ".$class."' placeholder='".$placeholder."' value='".$value."' ".$additional."/>";

        if($afterInput!=""){
            
        }

        return $output;
    }*/

    //Datalist
    public function createDatalist(array $options,string $idDatalist,string $class){
        $output = "<datalist id='".$idDatalist."' class='".$class."'>";

        //Recorrer los resultados de la consulta
        foreach ($options as $row){
            $output .= "<option value='".$row."'></option>";
        }

        $output .= "</datalist>";

        return $output;
    }

    //Dropdown
    public function createDropdownFromDB(array $resp,string $label,string $idDropdown,string $class,array $columns,string $defaultVal = 'Seleccione...',string $value = '0',string $specialOps = ""){
        $output = "";

        if($label!=""){
            $output .= $this->createLabel($label,$idDropdown,"");
        }

        $output .= "<select id='".$idDropdown."' class='form-select ".$class."'>
                        <option value=''>".$defaultVal."</option>";


        //Recorrer los resultados de la consulta
        foreach ($resp as $row){
            /*specialOps trae el nombre de una función que haya que aplicar al option,
            si no esta vacio, se aplica la función.*/
            $valOption = ($specialOps!="" ? $specialOps($row[$columns[1]]) : $row[$columns[1]]);
            if($row[$columns[0]] == $value){
                $output .= "<option value='".$row[$columns[0]]."' selected='selected'>".$valOption."</option>";
            }else{
                $output .= "<option value='".$row[$columns[0]]."'>".$valOption."</option>";
            }
        }


        $output .= "</select>";
        return $output;

    }

    //Simple dropdown
    public function createDropdown(array $options,string $label,string $idDropdown,string $class,string $defaultVal = 'Seleccione...',string $value = '0'){
        $output = "";

        if($label!=""){
            $output .= $this->createLabel($label,$idDropdown,"");
        }
        
        $output .= "<select id='".$idDropdown."' class='form-select ".$class."'>
                        <option value=''>".$defaultVal."</option>";


        //Recorrer los resultados de la consulta
        for($i=1;$i<=count($options)-1;$i++){
            if($options[$i] == $value){
                $output .= "<option value='".$options[$i]."' selected='selected'>".$options[$i]."</option>";
            }else{
                $output .= "<option value='".$options[$i]."'>".$options[$i]."</option>";
            }
        }


        $output .= "</select>";
        return $output;

    }

    //Button
    public function createButton(string $label,string $idButton,string $type,string $class,string $additional = null){
        $output = "<button type='".$type."' id='".$idButton."' name='".$idButton."' class='".$class."' ".$additional.">".$label."</button>";

        return $output;
    }

    //Link
    public function createATag(string $content,string $href,string $idATag,string $class,string $additional = null){
        $output = "<a href='".$href."' id='".$idATag."' class='".$class."' ".$additional.">".$content."</a>";

        return $output;
    }

    //Icon
    public function createITag(string $idITag,string $class,string $additional = null){
        $output = "<i id='".$idITag."' class='".$class."' ".$additional."></i>";

        return $output;
    }

    //Sub
    public function createSub(string $content,string $idSub,string $class,string $additional = null){
        $output = "<sub id='".$idSub."' class='".$class."' ".$additional.">".$content."</sub>";

        return $output;
    }


}
?>