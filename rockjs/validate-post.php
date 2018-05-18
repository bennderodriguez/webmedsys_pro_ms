<?php

$errorMSG = "";

// tipomov
if (empty($_POST["tipo-mov"])) {
    $errorMSG = "tipomov is required ";
} 
// entidad
if (empty($_POST["entidad"])) {
    $errorMSG .= "entidad is required ";
} 
// reason-code
if (empty($_POST["reason-code"])) {
    $errorMSG .= "reason-code is required ";
} 
// reference
if (empty($_POST["reference"])) {
    $errorMSG .= "reference is required ";
} 
// reference2
if (empty($_POST["reference2"])) {
    $errorMSG .= "reference2 is required ";
} 
// whs-code
if (empty($_POST["whs-code"])) {
    $errorMSG .= "whs-code is required ";
} 
// whs-zona
if (empty($_POST["whs-zona"])) {
    $errorMSG .= "whs-zona is required ";
} 
// vendor-code
if (empty($_POST["vendor-code"])) {
    $errorMSG .= "vendor-code is required ";
} 
// line-no
if (empty($_POST["line-no"])) {
    $errorMSG .= "line-no is required ";
} 
// item-no
if (empty($_POST["item-no"])) {
    $errorMSG .= "item-no is required ";
} 
// uom-code
if (empty($_POST["uom-code"])) {
    $errorMSG .= "uom-code is required ";
} 
// Cantidad
if (empty($_POST["Cantidad"])) {
    $errorMSG .= "Cantidad is required ";
} 
// cost
if (empty($_POST["cost"])) {
    $errorMSG .= "cost is required ";
} 
// job-no
if (empty($_POST["job-no"])) {
    $errorMSG .= "job-no is required ";
} 

// id-usuario
if (empty($_POST["id-usuario"])) {
    $errorMSG .= "id-usuario is required ";
} 
// DateTime
if (empty($_POST["DateTime"])) {
    $errorMSG .= "DateTime is required ";
} 



// redirect to success page
if ($errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>