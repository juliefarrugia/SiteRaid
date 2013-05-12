
    <h1 id="titleForm2">Rejoindre une équipe existante</h1>
        <br/>
        <br/>

   
        <form name="rejoindreForm" id="rejoindreForm" action="#" method="POST">
        
        <fieldset>
            
           <input id="jUrlAjaxRejoindre" type="hidden" value="{jurl 'site_internet~rejoindreEquipe@classic'}">
            
            <center> <label for="loginE">Nom de l'équipe</label>
            
           <input type="text" id="loginE" name="loginE"></center><br/>
            
             <center><label for="passwordE">Mot de passe de l'équipe</label>
            
            <input type="password" id="passwordE" name="passwordE"></center><br/>
            
            <br><center><input type="submit" value="Valider"></center>
</fieldset>

           </form>      
           <center><a title="continuer" id="continuer" style="visibility: hidden" href="{jurl 'site_internet~index@classic', array('page'=>'nouveauParticipant')}"><button>Continuer l'inscription</button></a></center>
           
  