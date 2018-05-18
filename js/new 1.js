   $.ajax({
        type: "GET",
        //url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_OPERACION_PC.v1/?",
	//url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_5.1.wadl?",
		url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_OS_5.v1/",
	      //http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_OS_5.v1/?ttentidad=MS010&ttitem_no=422000155&ttcreate_date=2018-04-12&ttactive=1&ttdescription1=descrip1&ttdescription2=descrip2&ttsort_name=GUIA%20DE%20NITINOL%20PARA%20CADERA%201&ttuom_code=PZA&ttcategoria=C0009&ttstocked=true&ttError=true

        data: "ttentidad=" + SETID + "&ttitem_no=" + INV_ITEM_ID + "&ttcreate_date=" + ITM_STATUS_EFFDT
		+ "&ttactive=" + ITM_STATUS_CURRENT + "&ttdescription1=" + DESCR + "&ttdescription2=" + DESCRSHORT
		+ "&ttsort_name=" + DESCR60 + "&ttuom_code=" + UNIT_MEASURE_STD + "&ttcategoria=" + CATEGORY_ID
		+ "&ttstocked=" + INVENTORY_ITEM + "&ttError=" + FLAG,
       
		//console.log(url+data);
	   success : function(text){
		   console.log(text);
		   var JsonReq = text;
			//obj = JSON.parse(JsonReq);
			console.log("text.response.errorMSG "+text.response.errorMSG);
			//console.log("text.ﻨ晘+";".errorMSG " +text.ﻨ晘+";".errorMSG);
		   //errorMSG 
		   
		   /*Exito alta PS*/
            if (text.response.errorMSG == 'ExitoITEM'){
                formSuccess();
				//formError(data);
                submitMSG(false,text.response.errorMSG);
				/*Triger alta Medsys*/
				$.ajax({
				type: "GET",
				url: "http://192.168.61.36/webmedsys/REST/create3.php",
				data: "ttentidad=" + SETID + "&ttitem_no=" + INV_ITEM_ID + "&ttcreate_date=" + ITM_STATUS_EFFDT
				+ "&ttactive=" + ITM_STATUS_CURRENT + "&ttdescription1=" + DESCR + "&ttdescription2=" + DESCRSHORT
				+ "&ttsort_name=" + DESCR60 + "&ttuom_code=" + UNIT_MEASURE_STD + "&ttcategoria=" + CATEGORY_ID
				+ "&ttstocked=" + text.response.errorMSG + "&ttError=NONE&ERROR_CODE=200",
				success : function(text){
				if (text != "Creacion Exitosa"){
				console.log(text);
				} else {

				console.log(text);

				}
				}
				});
			/*Error alta PS*/
            } else {
				/*Triger tt_error*/
                //formError(data);
                submitMSG(false,text.response.errorMSG);
				//nuevo ajax
				$.ajax({
				type: "GET",
				url: "http://192.168.61.36/webmedsys/rockjs/test.php?p=ms_terror_item",
				data: "SETID=" + SETID + "&INV_ITEM_ID=" + INV_ITEM_ID + "&ITM_STATUS_EFFDT=" + today
				+ "&ITM_STATUS_CURRENT=" + ITM_STATUS_CURRENT + "&DESCR=" + DESCR + "&DESCRSHORT=" + DESCRSHORT
				+ "&DESCR60=" + DESCR60 + "&UNIT_MEASURE_STD=" + UNIT_MEASURE_STD + "&CATEGORY_ID=" + CATEGORY_ID
				+ "&ERROR_CODE_TEXT=" + text.response.errorMSG + "&FLAG="+FLAG+"&ERROR_CODE=" + "503",
				success : function(text){
				if (text != "Creacion Exitosa"){
				console.log(text);
				} else {

				console.log(text);

				}
				}
				});
				//nuevo ajax
				
            }
        }
    });