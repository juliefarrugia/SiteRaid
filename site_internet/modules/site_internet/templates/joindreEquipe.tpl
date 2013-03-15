<div id="barre"></div>
    <header>
    <img class="logo" alt="logo" src="img/logoban.png">
        <nav>
            <ul id="menuDeroulant">
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li>
                    <a href="index.html">Raid HEI 2013</a>
                        <ul class="sousMenu">
                            <li>
                                <a href="index.html">Evènement</a>
                            </li>
                            <li>
                                <a href="raidLieu.html">Lieu</a>
                            </li>
                            <li>
                                <a href="raidInfos.html">Infos pratiques</a>
                            </li>
                            <li>
                                <a href="raidMateriel.html">Matériel</a>
                            </li>
                            <li>
                                <a href="raidEpreuves.html">Epreuves</a>
                            </li>
                        </ul>
                </li>
                <li>
                    <a href="RELInfos.html">REL</a>
                        <ul class="sousMenu">
                            <li>
                                <a href="RELLieu.html">Lieu</a>
                            </li>
                            <li>
                                <a href="RELEcoles.html">Ecoles</a>
                            </li>
                            <li>
                                <a href="RELInfos.html">Infos</a>
                            </li>
                        </ul>
                </li>
                <li>
                    <a href="equipe.html">L'Association</a>
                        <ul class="sousMenu">
                            <li>
                                <a href="equipe.html">L'équipe</a>
                            </li>
                            <li>
                                <a href="raidsprecedents.html">Raids précédents</a>
                            </li>
                            <li>
                                <a href="environnement.html">Environnement</a>
                            </li>
                        </ul>
                </li>
                <li>
                    <a href="partenaire.html">Partenaire</a>
                        <ul class="sousMenu">
                            <li>
                                <a href="partenaire.html">Nos partenaires</a>
                            </li>
                            <li>
                                <a href="devenirpartenaire.html">Devenir partenaire</a>
                            </li>
                        </ul>
                            </li>
                            <li>
                                <a href="photo.html">Multimédias</a>
                        <ul class="sousMenu">
                            <li>
                                <a href="photo.html">Photos</a>
                            </li>
                            <li>
                                <a href="video.html">Vidéos</a>
                            </li>
                        </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    <p class="fil">
        <a href="#">Accueil</a>
    >
        <a href="#">Raid HEI 2013</a>
    > L'évènement
    </p>
    </header>

<div class="corps">
<div class="colonne">
<aside class="connexion">

<h2 id="titleForm">Se connecter</h2>
   
    <form name="connexionForm" id="connexionForm" action="#" method="POST">
        
        <fieldset>
            
            <input id="jUrlAjaxConnexion" type="hidden" value="{jurl 'site_internet~connexion@classic'}">
            
            <label for="login">Identifiant</label>
            
            <input type="text" id="login" name="login"><br>
            
            <label for="password">Mot de passe</label>
            
            <input type="password" id="password" name="password"><br>
            
            <br><center><input type="submit" value="Connexion"></center>
</fieldset>
          
</form>

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

<footer>
<p class="copyright"> Copyright - Raid HEI 2013 </p>
</footer>

</div>

