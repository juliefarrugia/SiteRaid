<div class="colonne">
<aside class="connexion">

<h2 id="titleForm">Se connecter</h2>
   
    <form name="connexionForm" id="connexionForm" action="#" method="POST">
        
        <fieldset>
            
            <input id="jUrlAjaxConnexion" type="hidden" value="{jurl 'site_internet~connexion@classic'}">
            
            <label for="login">Identifiant</label>
            
            <input type="text" id="login" name="login"><br>
            
            <label for="password">Mot de passe</label>
            
            <input type="password" id="password" name="password"><br><br>
            
            <center><input type="submit" value="Connexion"></center>
</fieldset>
</form>
            <center><a title="inscrire" href="{jurl 'site_internet~sinscrire@classic'}">S'inscrire</a></center>
</aside>
            
    <aside class="inscrits">
        <h2>Equipes inscrites</h2>
        <p class="lieninscrits">
            <ul>
            {foreach $ALLEQUIPE as $COURANTEQUIPE}
                <li> {$COURANTEQUIPE->nomEquipe}</li> 
                {/foreach}
             </ul>
        </p>
    </aside>
         
    <aside class="infos">

        <h3>Mot du prez</h3>
            <br>
                <p>
        Réservez dès à présent les 5, 6 et 7 avril 2013 pour vivre une expérience magique : la 20ème édition du Raid HEI !! Avec l’ensemble de mon équipe, nous avons voulu donner une dimension supplémentaire à ce Raid en l’organisant dans les Ardennes, région vallonnée très propice à la pratique des sports extérieures, offrant des challenges adaptés au niveau de chacun.
            <br>
            <br>
        C’est avec plaisir que toute l’équipe se mobilise depuis le mois de juin dernier pour vous faire vivre une expérience inoubliable.
            <br>
            <br>
        En attendant de vous voir sur les parcours du RAID HEI 2013 je tiens à vous remercier de la confiance que vous nous accordez pour que cet événement se déroule dans un esprit convivial et sportif.
            <br>
            <br>
        Clément Lorrain
                </p>
    </aside>
</div>
