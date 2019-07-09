$(document).ready(function(){
	
	$('#azul').click(function(){
		$('p').css("background-color", "blue");
		$('p').fadeOut();
		$('p').fadeIn(4000);
	});

	$('#vermelho').click(function(){
		$('p').css("background-color", "red");
		$('p').fadeOut(2000);
		$('p').fadeIn(2000);
		$("#mensagem").text("Mensagem sumindo e aparecendo");
		$("#mensagem").css('color', 'red');
		$("#mensagem").delay(2000);
		$('#mensagem').css('border', '1px solid grey');
		$('#mensagem').fadeOut('fast');
	});

});