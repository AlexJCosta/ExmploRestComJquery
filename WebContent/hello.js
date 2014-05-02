$(document).ready(function() {
	
	$.getJSON("http://api.iwebservice.com.br/CEP/?cep=40110-900&formato=json&chave=135RQ-217O8-1FDMR-8246L", function (json) {
	    alert(json.result);
	    $.each(json.list, function (i, fb) {
	        alert(fb.result);
	    });
	});
	
//	var json = '{"result":true,"count":1}',
//    obj = JSON.parse(json);
//
//	alert(obj.count);
	
	
	
	
//    $.ajax({
//        url: "http://api.iwebservice.com.br/CEP/?cep=40110-900&formato=json&chave=135RQ-217O8-1FDMR-8246L"
//    }).then(function(data) {
////       $('.resultado').append(data.resultado);
//       
//    });
});



