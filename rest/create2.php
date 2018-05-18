<?php

$errorMSG = "";

//Aseguramos de que sea una solicitud GET
if (strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') != 0) {
    $errorMSG = "Request method must be GET! <br>";
}

// ttentidad
if (empty($_GET["ttentidad"])) {
    $errorMSG .= "ttentidad is required<br>";
} 
// ttitem-no
if (empty($_GET["ttitem_no"])) {
    $errorMSG .= "ttitem_no is required <br>";
} else{
	putenv("ttitem-no=".$_GET["ttitem_no"]));
}
// ttcreate-date
if (empty($_GET["ttcreate_date"])) {
    $errorMSG .= "ttcreate_date is required <br>";
} 
else{
	putenv("ttcreate-date=".$_GET["ttcreate_date"]));
}
// ttactive
if (empty($_GET["ttactive"])) {
    $errorMSG .= "ttactive is required <br>";
} 
// ttdescription1
if (empty($_GET["ttdescription1"])) {
    $errorMSG .= "ttdescription1 is required<br> ";
} 
// ttdescription2
if (empty($_GET["ttdescription2"])) {
    $errorMSG .= "ttdescription2 is required<br> ";
} 
// ttsort-name
if (empty($_GET["ttsort_name"])) {
    $errorMSG .= "ttsort_name is required<br> ";
} else{
	putenv("ttsort-name=".$_GET["ttsort_name"]));
}
// ttuom-code
if (empty($_GET["ttuom-code"])) {
    $errorMSG .= "ttuom_code is required<br> ";
} else{
	putenv("ttuom-code=".$_GET["ttuom_code"]));
}
// ttcategoria
if (empty($_GET["ttcategoria"])) {
    $errorMSG .= "ttcategoria is required<br> ";
} 
// ttstocked
if (empty($_GET["ttstocked"])) {
    $errorMSG .= "ttstocked is required<br> ";
} 
 
// ttError
if (empty($_GET["ttError"])) {
    $errorMSG .= "ttError is required<br> ";
} 




// sin errores de peticion 
if ($errorMSG == ""){
	//importamos rockjs
	include_once "../rockjs/openrockjs.php";
	//invocamos al programa p
	setProgram("surtimiento");
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

/**
 * 
 * @param type $prog Description:
 * Define el objeto programa Progress concatenando los elementos necesarios 
 * para la ejecucion en RockJS
 */
function setProgram($prog) {
    /* CreaciÃ³n del objeto RockJS */
    $Rockobj = new RockJS;
    /**
     * @method type _openrockjs(type $Programa) Description:
     * Crea una instancia de la clase RockJS y retorna una valor Boleano
     * False: Error
     * True: Muestra el resultado de la ejecucion
     */
    if ($Rockobj->_openrockjs($prog) == false) {
        echo 'Something went wrong please try again';
    } else {
        echo $Rockobj->setResult;
    }
}


/*
http://192.168.61.36/webmedsys/REST/create2.php?ttentidad=MEDSR&ttitem-no=504504376&ttcreate-date=02/16/2018&ttactive=1&ttdescription1=description%201&ttdescription2=description%202&ttsort-name=KIT%20COMPLETO%20DRENAJE%20SYSTEM%20II821730&ttuom-code=%20PZA&ttcategoria=C0009&ttstocked=false&ttError=true
*/
/*
ttentidad=MEDSR
&ttitem-no=504504376
&ttcreate-date=02/16/2018
&ttactive=1
&ttdescription1=description 1
&ttdescription2=description 2
&ttsort-name=KIT COMPLETO DRENAJE SYSTEM II821730
&ttuom-code= PZA
&ttcategoria=C0009
&ttstocked=false
&ttError=true
*/
?>