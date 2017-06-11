
function showUp () {
	var disp = $("#Up").css('display');
	if(disp == "none"){
		$("#Up").animate({opacity:"show"}, 500);
	}
	else{
		$("#Up").animate({opacity:"hide"}, 500);
	}
}

function showSP () {
	var disp = $("#inf").css('display');
	if(disp == "none"){
		$("#inf").animate({opacity:"show"}, 500);
	}
	else{
		$("#inf").animate({opacity:"hide"}, 500);
	}
}
function setId(id, model, country, viltur, date){
	var idU = document.getElementById('idU');
	var modelU = document.getElementById('modelU');
	var	countryU = document.getElementById('countryU');
	var vilturU = document.getElementById('vilturU');
	var dateU = document.getElementById('dateU');
	idU.value = id;
	modelU.value = model;
	countryU.value = country;
	if(viltur == 1){
		vilturU.checked = true;
	}
	else{
		vilturU.checked = false;
	}
	dateU.value = date;
}
