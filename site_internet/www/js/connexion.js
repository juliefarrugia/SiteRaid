$(document).ready(function () {
	
        $("#connexionForm").submit( function() {

                var $jUrlAjaxConnexion =$("#jUrlAjaxConnexion").val();
		var $login=$("#login").val();
		var $password=$("#password").val();

		var $ajaxRequest= $.ajax({
			type:"POST",
			url: $jUrlAjaxConnexion,
			data: "login="+$login+"&password="+$password});

	$ajaxRequest.done(function() {
			$("#titleForm").text("Bienvenue à toi valeureux Raideur !");
			$("#titleForm").css("color","green");
			$("#connexionForm").css("display","none");

		}); 
	
	$ajaxRequest.fail(function() {
			$("#titleForm").css("color","red");
			$("#titleForm").text("Le couple identifiant/mot de passe est incorrect !");
		});

		return false;
	});


});

 


