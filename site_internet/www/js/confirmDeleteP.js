$(document).ready(function(){
    jFormsJQ.getForm("jforms_site_internet_delParticipant").addSubmitHandler(function(event){
         return window.confirm("Etes-vous sûre de vouloir supprimer ce participant ?");
       });
});
