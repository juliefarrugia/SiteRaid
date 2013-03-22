 
    {include 'site_internet~Amenu'}

<div class="corps">
    
     {include 'site_internet~AbarreLateral'}

<div class="principal">
    
    <h1 id="titleForm2">Rejoindre une équipe existante</h1>
        <br>
        <br>

   
        <form name="rejoindreForm" id="rejoindreForm" action="#" method="POST">
        
        <fieldset>
            
           <input id="jUrlAjaxRejoindre" type="hidden" value="{jurl 'site_internet~rejoindreEquipe@classic'}">
            
            <center> <label for="loginE">Nom de l'équipe</label>
            
           <input type="text" id="loginE" name="loginE"></center><br>
            
             <center><label for="passwordE">Mot de passe de l'équipe</label>
            
            <input type="password" id="passwordE" name="passwordE"></center><br>
            
            <br><center><input type="submit" value="Valider"></center>
</fieldset>
</form>
           <center><a title="continuer" href="{jurl 'site_internet~addParticipant@classic'}">Continuer l'inscription</a></center>



            
</div>

     {include 'site_internet~Afooter'}

</div>
