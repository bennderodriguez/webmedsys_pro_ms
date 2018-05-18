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

   $.ajax({
        type: "GET",
        //url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_OPERACION_PC.v1/?",
	//url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_5.1.wadl?",
	url: "http://192.168.61.142:8086/PSIGW/RESTListeningConnector/PSFT_EP/MS_ITEM_OS_5.v1/?",

        data: "ttentidad=" + SETID + "&ttitem_no=" + INV_ITEM_ID + "&ttcreate_date=" + today
		+ "&ttactive=" + ITM_STATUS_CURRENT + "&ttdescription1=" + DESCR + "&ttdescription2=" + DESCRSHORT
		+ "&ttsort_name=" + DESCR60 + "&ttuom_code=" + UNIT_MEASURE_STD + "&ttcategoria=" + CATEGORY_ID
		+ "&ttstocked=" + INVENTORY_ITEM + "&ttError=" + FLAG,
        success : function(text){
            if (text == '{"response": {
"errorMSG": "ExitoITEM"}
}'){
                formSuccess();
            } else {
				
                //formError(data);
                submitMSG(false,text);
				//nuevo ajax
				$.ajax({
				type: "POST",
				url: "http://192.168.61.36/webmedsys/rockjs/",
				data: "p=ms_terror_item" + "&SETID=" + SETID + "&INV_ITEM_ID=" + INV_ITEM_ID + "&ITM_STATUS_EFFDT=" + today
				+ "&ITM_STATUS_CURRENT=" + ITM_STATUS_CURRENT + "&DESCR=" + DESCR + "&DESCRSHORT=" + DESCRSHORT
				+ "&DESCR60=" + DESCR60 + "&UNIT_MEASURE_STD=" + UNIT_MEASURE_STD + "&CATEGORY_ID=" + CATEGORY_ID
				+ "&ERROR_CODE_TEXT=" + "OnRequest could not run to completion." + "&FLAG="+FLAG+"&ERROR_CODE=" + "503",
				success : function(text){
				if (text != "Creacion Exitosa"){
				console.log("Error not saved");
				} else {

				console.log("Error saved");

				}
				}
				});
				//nuevo ajax
				
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