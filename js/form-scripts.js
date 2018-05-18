$("#employe").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Todos los campos son ");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var idemp = $("#idemp").val();
	//console.log(idemp);
	
	var depid = $("#depid").val();
	//console.log(depid);
	
	var empnombre = $("#empnombre").val();
	//console.log(empnombre);
	
	var empcargo = $("#empcargo").val();
	//console.log(empcargo);
	
	var emplfechacontrato = $("#emplfechacontrato").val();
	//console.log(emplfechacontrato);
	
	var empsalario = $("#empsalario").val();
	//console.log(empsalario);
	
	var empcomision = $("#empcomision").val();
	//console.log(empcomision);
	
	var empbonificado = $("#empbonificado").val();
	//console.log(empbonificado);
   
   $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "idemp=" + idemp + "&depid=" + depid + "&empnombre=" + empnombre + "&empcargo=" + empcargo
			  + "&emplfechacontrato=" + emplfechacontrato + "&empsalario=" + empsalario + "&empcomision=" + empcomision
			  + "&empbonificado=" + empbonificado,
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
    $("#employe")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError(){
    $("#employe").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
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