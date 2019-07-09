/*$(document).ready(function(){
	$('button').click(function(){
		$('h1').hide();
	});
});

 ou $(function(){
	$('button').click(function(){
		$('h1').hide();
	});
});*/

$(document).ready(function(){
	
	$('#azul').click(function(){
		$('p').css("color", "blue");
	});

	$('#vermelho').click(function(){
		$('p').css("color", "red");
	});
});