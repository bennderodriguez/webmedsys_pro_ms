$("#rockjs").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Llene los campos obligatorios");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
var SETID = $("#SETID").val();
var INV_ITEM_ID = $("#INV_ITEM_ID").val();
var ITM_STATUS_EFFDT = $("#ITM_STATUS_EFFDT").val();
var ITM_STATUS_CURRENT = $("#ITM_STATUS_CURRENT").val();
var DESCR = $("#DESCR").val();
var DESCRSHORT = $("#DESCRSHORT").val();
var DESCR60 = $("#DESCR60").val();
var UNIT_MEASURE_STD = $("#UNIT_MEASURE_STD").val();
var CATEGORY_ID = $("#CATEGORY_ID").val();
var INVENTORY_ITEM = $("#INVENTORY_ITEM").val();
var FLAG = $("#FLAG").val();

console.log(SETID);
console.log(INV_ITEM_ID);
console.log(ITM_STATUS_EFFDT);
console.log(ITM_STATUS_CURRENT);
console.log(DESCR);
console.log(DESCRSHORT);
console.log(DESCR60);
console.log(UNIT_MEASURE_STD);
console.log(CATEGORY_ID);
console.log(INVENTORY_ITEM);
console.log(FLAG);

var today = new Date();           
var formattedtoday = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();

    /**
     * PSeudoCodigo
     * submit btn Guardar
     *      //determina si el articulo que se desea grabar existe en MS
     *      [1] call funtion busca_existencia_ms()
     *      if(respuestaMS=="Este Articulo ya existe en MEDSY"){
     *          "Este articulo existe en MS"
     *          Alta en tabla de Error;
     *          break;
     *      [2]}else{
     *          "Este articulo se puede dar de alta en MED"
     *          //Call function envia a PS;
     *         [2|A]alta_to_ps();
     *              if(respuestaPS==ExitoITEM){
     *              //call_function Alta art MS
     *         [2|B]alta_art_MS();
     *              }else{
     *              break;
     *              }
     *      }
			[END]
     *      
     *      
     */
	 
	 //[1] determinar si el articulo que se desea grabar existe en MS
		 $.ajax({
			type: "GET",
			//INVOCAMOS SW PARA BUSQUEDA DE ITEM EN MS
			url: "http://192.168.61.36/webmedsys/rockjs/test.php",
			//ENVIAMOS LA DATA
			data: "p=swbusca_ttitem_ms&ttentidad=10&ttitem-no="+INV_ITEM_ID,
			success : function(respuestaMS){
				//COMPARAMOS LA RESPUESTA DEL SW
				if (respuestaMS == "    Este articulo se puede dar de alta en MEDSYS"){
					console.log(respuestaMS);
					//SE CUMPLIO LA CONDICIO Y AHORA INVOCAMOS AL SW A PS
					//Call function envia a PS;
					//[2|A]alta_to_ps();
						$.ajax({
							type: "GET",
							//url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_OPERACION_PC.v1/?",
							//url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_5.1.wadl?",
							//INVOCAMOS SW DE PS
							url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_OS_5.v1/",
							//http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_OS_5.v1/?ttentidad=MS010&ttitem_no=422000155&ttcreate_date=2018-04-12&ttactive=1&ttdescription1=descrip1&ttdescription2=descrip2&ttsort_name=GUIA%20DE%20NITINOL%20PARA%20CADERA%201&ttuom_code=PZA&ttcategoria=C0009&ttstocked=true&ttError=true
							//ENVIAMOS LA DATA
							data: "ttentidad=" + SETID + "&ttitem_no=" + INV_ITEM_ID + "&ttcreate_date=" + ITM_STATUS_EFFDT
							+ "&ttactive=" + ITM_STATUS_CURRENT + "&ttdescription1=" + DESCR + "&ttdescription2=" + DESCRSHORT
							+ "&ttsort_name=" + DESCR60 + "&ttuom_code=" + UNIT_MEASURE_STD + "&ttcategoria=" + CATEGORY_ID
							+ "&ttstocked=" + INVENTORY_ITEM + "&ttError=" + FLAG,
							
							success : function(text){
								//IMPRIMO JSON RESPUESTA DEL SW PS
								console.log("jsonoriginal "+text);
								//LO ASIGNO A LA VARIABLE X
								var x = text;
								console.log("text json "+ JSON.stringify(x));
								// X LO COMVIERTO EN STRING
									var str = JSON.stringify(x);
								//VERIFICO SI LA CADENA DE TEXTO CONTIENE ExitoITEM
									var ResponseMSG  = str.includes("ExitoITEM");
								//EVALUAMOS ResponseMSG = TRUE	
								 if (ResponseMSG){
									formSuccess();
									console.log("ExitoITEM Ahora Llana a MS");
									//SE CUMPLIO LA CONDICIO Y AHORA INVOCAMOS AL SW DE MS
									//LLAMAMOS AL SERVICIO WEB DE ALTA EN MS
									//if(respuestaPS==ExitoITEM){
									//call_function Alta art MS
									//[2|B]alta_art_MS();
										$.ajax({
											type: "GET",
											//INVOCAMOS AL SW DE ALTA EN MS
											url: "http://192.168.61.36/webmedsys/REST/create3.php",
											//ENVIAMOS LA DATA
											data: "ttentidad=10&ttitem_no=" + INV_ITEM_ID + "&ttcreate_date=" + ITM_STATUS_EFFDT
											+ "&ttactive=" + ITM_STATUS_CURRENT + "&ttdescription1=" + DESCR + "&ttdescription2=" + DESCRSHORT
											+ "&ttsort_name=" + DESCR60 + "&ttuom_code=" + UNIT_MEASURE_STD + "&ttcategoria=" + CATEGORY_ID
											+ "&ttstocked=1&ttError=NONE&ERROR_CODE=200",
											success : function(text){
												if (text == "Exito"){
													console.log("Respuesta de alta MS" + text);
													//LE DAMOS RESPUESTA VISUAL AL USUARIO DE ALTA EXITOSA
													formSuccess();
												} else {
													console.log("Respuesta de alta MS" + text);
													formError();
													submitMSG(false,text);
												}
											}
										});
									//END[2|B]alta_art_MS();
								} else {
									//EN CASO DE ERROR EN ALTA DE PS
									console.log("ErrorITEM llama tabla de error");
									//call_function ERROR art MS
									//[2|B]ERROR art MS();
										$.ajax({
											type: "GET",
											//INOVAMOS A SW MS PARA GUARDAR EL ERROR
											url: "http://192.168.61.36/webmedsys/REST/create3.php",
											//ENVIAMOS LA DATA
											data: "ttentidad=10&ttitem_no=" + INV_ITEM_ID + "&ttcreate_date=" + ITM_STATUS_EFFDT
											+ "&ttactive=" + ITM_STATUS_CURRENT + "&ttdescription1=ErrorITEM PS&ttdescription2=" + DESCRSHORT
											+ "&ttsort_name=" + DESCR60 + "&ttuom_code=" + UNIT_MEASURE_STD + "&ttcategoria=" + CATEGORY_ID
											+ "&ttstocked=1&ttError=3&ERROR_CODE=402",
											success : function(text){
												//if (text){
													console.log("Seguardo el Error en tabla tterro " + text);
												//}
											}
										});
									//END[2|B]ERROR art MS();
									formError();
									submitMSG(false,text);
								}
							}
						});
					//END[2|A]alta_to_ps();
				} else {
					//ERROR POR QUE ARTICULO YA EXISTE EN MS
					console.log(respuestaMS);
					console.log("Debes de llamar la tabla de error aqui");
					console.log("ErrorITEM llama tabla de error");
									//call_function ERROR art MS
									//[2|B]ERROR art MS();
										$.ajax({
											type: "GET",
											//LLAMAMOS AL SW DE MS PARA EL ALTA DE ERROR
											url: "http://192.168.61.36/webmedsys/REST/create3.php",
											//ENVIAMOS LA DATA
											data: "ttentidad=10&ttitem_no=" + INV_ITEM_ID + "&ttcreate_date=" + ITM_STATUS_EFFDT
											+ "&ttactive=" + ITM_STATUS_CURRENT + "&ttdescription1=Este Articulo ya existe en MEDSYS&ttdescription2=" + DESCRSHORT
											+ "&ttsort_name=" + DESCR60 + "&ttuom_code=" + UNIT_MEASURE_STD + "&ttcategoria=" + CATEGORY_ID
											+ "&ttstocked=1&ttError=3&ERROR_CODE=402",
											success : function(text){
												//if (text){
													console.log("Seguardo el Error en tabla tterro: Progress dice " + text);
												//}
											}
										});
									//END[2|B]ERROR art MS();
					formError();
					submitMSG(false,respuestaMS);
				}
			}
		});


}

function RestError(data){
    console.log(data);
}

function formSuccess(){
    $("#rockjs")[0].reset();
    submitMSG(true, "Artículo Agregado!")
}

function formError(){
    $("#rockjs").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}