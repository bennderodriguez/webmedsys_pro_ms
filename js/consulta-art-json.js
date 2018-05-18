//<html ng-app="app">
    /**
     * Funcion que captura las variables pasados por GET
     * http://www.lawebdelprogramador.com/pagina.html?id=10&pos=3
     * Devuelve un array de clave=>valor
     */
/*
 *1- Recolectamos los valores Navigate y numerpag que llegan por _GET
 *2- Dependiendo de las opciones se dispara la peticion al SW/


/**
 * @param String name
 * @return String
 */
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var Navigate = getParameterByName('navigate');
var numerpag = getParameterByName('numerpag');
myUrl = opturli(Navigate, numerpag);
/**
 * @param String name
 * @return String
 */
function opturli(Navigate, numerpag) {
	var url="";
	switch (Navigate) {
  case "first":
	url = "js/medsys.php?Navigate="+Navigate;
	return url;
    break;
  case "prev":
    url = "js/medsys.php?Navigate="+Navigate+"&numerpag="+numerpag;
	return url;
    break;
  case "sig":
    url = "js/medsys.php?Navigate="+Navigate+"&numerpag="+numerpag;
	return url;
    break;
  case "last":
    url = "js/medsys.php?Navigate="+Navigate;
	return url;
    break;
  default:
    url = "js/medsys.php";
	return url;
  }
}
	 
var app= angular.module('MyFirstApp',[])
	.controller("FirstController",function($scope,$http)
	{
		console.log(myUrl);
		$http.get(myUrl)
		.success(function(data)
		{
			//console.log(data);
			$scope.posts= data;
		})
		.error(function(err)
		{
			console.log("Servicio no disponible"+err);
			document.getElementById("getErrorSW").innerHTML = "Servicio no disponible"+err;
		});		
	});




  