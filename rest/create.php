<?php

//Aseguramos de que sea una solicitud GET
/*if (strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') != 0) {
    throw new Exception('Request method must be GET!');
}*/

//Aseguramos de que el tipo de contenido de la solicitud GET se haya configurado en application / json
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
if (strcasecmp($contentType, 'application/json') != 0) {
    throw new Exception('Content type must be: application/json');
}

//Recibe los datos de la publicación.
$content = trim(file_get_contents("php://input"));

//Intenta descifrar los datos de entrada RAW entrantes de JSON.
$decoded = json_decode($content, true);

//Si json_decode falló, el JSON no es válido.
if (!is_array($decoded)) {
    throw new Exception('Received content contained invalid JSON!');
}

//Procesar el JSON.
$jsonIterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator(json_decode($content, TRUE)), RecursiveIteratorIterator::SELF_FIRST);

//recorremos el JSON para extraer k y v
foreach ($jsonIterator as $key => $val) {
    if (is_array($val)) {
        //echo "$key:\n";
    } else {
        //subimos vars a memoria K=V
        //echo "$key => $val\n";
        putenv("$key=$val");
    }
}
//importamos rockjs
include_once "../rockjs/openrockjs.php";
//invocamos al programa p
setProgram("surtimiento");

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
