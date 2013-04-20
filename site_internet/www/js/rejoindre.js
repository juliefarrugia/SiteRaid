$(document).ready(function () {

        $("#rejoindreForm").submit( function() {

                var $jUrlAjaxRejoindre =$("#jUrlAjaxRejoindre").val();
		var $loginE=$("#loginE").val();
		var $passwordE=$("#passwordE").val();
                

		var $ajaxRequest= $.ajax({

			type:"POST",
			url: $jUrlAjaxRejoindre,
			data: "loginE="+$loginE+"&passwordE="+$passwordE});

	$ajaxRequest.done(function(returnedData) {
			$("#titleForm2").text("Vous avez rejoins l'équipe "+returnedData.nomEquipe+" !");
			$("#titleForm2").css("color","green");
			$("#rejoindreForm").css("display","none");
                        

		});
	
	$ajaxRequest.fail(function() {
			$("#titleForm2").css("color","red");
			$("#titleForm2").text("Problème de login/mot de passe, vous n'avez pas rejoins l'équipe !");
                        
		});

		return false;
	});

});