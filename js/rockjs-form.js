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
var tipomov = $("#tipo-mov").val();
console.log("Variable "+tipomov);
var entidad = $("#entidad").val();
console.log("entidad "+entidad);
var reasoncode = $("#reason-code").val();
console.log("reason-code "+reasoncode);
var reference = $("#reference").val();
console.log("reference "+reference);
var reference2 = $("#reference2").val();
console.log("reference2 "+reference2);
var whscode = $("#whs-code").val();
console.log("whs-code "+whscode);
var whszona = $("#whs-zona").val();
console.log("whs-zona "+whszona);
var vendorcode = $("#vendor-code").val();
console.log("vendor-code "+vendorcode);
var lineno = $("#line-no").val();
console.log("line-no "+lineno);
var itemno = $("#item-no").val();
console.log("item-no "+itemno);
var uomcode = $("#uom-code").val();
console.log("uom-code "+uomcode);
var Cantidad = $("#Cantidad").val();
console.log("Cantidad "+Cantidad);
var cost = $("#cost").val();
console.log("cost "+cost);
var jobno = $("#job-no").val();
console.log("job-no "+jobno);
var idusuario = $("#id-usuario").val();
console.log("id-usuario "+idusuario);
var DateTime = $("#DateTime").val();
console.log("DateTime "+DateTime);

var today = new Date();           

var formattedtoday = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();

console.log(formattedtoday);
//Variables vacias
	

	
   
   $.ajax({
        type: "POST",
        url: "http://localhost/medsys/rockjs/?p=testMedsys",
        data: "vtt-tipo-mov=" + tipomov + "&vtt-entidad=" + entidad + "&vtt-reason-code=" + reasoncode + "&vtt-reference=" + reference + "&vtt-reference2=" + reference2 + "&vtt-whs-code=" + whscode  + "&vtt-whs-zona=" + whszona + "&vtt-vendor-code=" + vendorcode + "&vtt-line-no=" + lineno + "&vtt-item-no=" + itemno + "&vtt-uom-code=" + uomcode + "&vtt-Cantidad=" + Cantidad + "&vtt-cost=" + cost + "&vtt-job-no=" + jobno + "&vtt-id-usuario=" + idusuario + "&vtt-DateTime=" + formattedtoday,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#rockjs")[0].reset();
    submitMSG(true, "Message Submitted!")
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