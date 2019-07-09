$(document).ready(function(){
	
	$('#azul').click(function(){
		$('p')
			.css("background-color", "blue")
			.fadeOut()
			.fadeIn(4000);
	});

	$('#vermelho').click(function(){
		$('p').css("background-color", "red");
		$("#mensagem")
			.text("Cor alterada!")
			.css({color:'red', border:'1px solid grey', backgroundColor: 'black'})
			.delay(2000)
			.fadeOut('fast');
	});

});