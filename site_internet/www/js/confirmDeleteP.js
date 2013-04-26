jQuery(document).ready(function(){
   
   jFormsJQ.getForm("jforms_site_internet_delEquipe").addSubmitHandler(function(e){
         return window.confirm("Etes-vous sûre de vouloir supprimer cette équipe et tous les participants qui la compose ?");
       });
       
});