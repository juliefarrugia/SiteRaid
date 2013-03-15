
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

<h2><center><a title="creerEquipe" href="{jurl 'site_internet~addEquipe@classic'}">Etat de l'inscription</a></center></h2>
        <h2><center><a title="rejoindreEquipe" href="{jurl 'site_internet~rejoindreEquipe@classic'}">Vos informations</a></center></h2>
        <h2><center><a title="petitesAnnonces" href="{jurl 'site_internet~petitesAnnonces@classic'}">Votre équipe</a></center></h2>
            
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
                <h1>Qu'est ce que le Raid HEI ?</h1><br /><br/>
                <div class="bloc">
                    <p class="left">
                        Le RAID HEI est une succession d’épreuves se déroulant durant un week-end. Il est ouvert à tous : aussi bien aux 
                        débutants qu’aux sportifs expérimentés. Nous cherchons à transmettre aux salariés comme aux étudiants les valeurs 
                        d’esprit d’équipe, de motivation et de dépassement de soi.
                    </p>
                    <img class="right" src="img/eve1.JPG" alt=":)">
                </div>
                <div class="bloc">
                    <p>
                        Pendant ces deux jours se succéderont différentes épreuves sportives comme le VTT, la canoë, le Run and Bike, la 
                        course à pied ou course nocturne, la course d’orientation. L’organisation réserve aussi des épreuves surprises.
                    </p>
                </div>
                <div class="bloc">
                    <img class="left" src="img/eve2.JPG" alt="equipe">
                    <p class="right">
                        Le Raid HEI se fait par équipes de 4. Que vous soyez étudiants ou salariés, composez votre équipe en fonction 
                        de votre parcours : parcours EXPERT ou parcours AVENTURE, chacun trouvera chaussure à son pied. Cette année le 
                        Raid HEI accepte pour la 1ère fois les équipes 100% masculine
                    </p>
                </div>
                <div class="bloc">
                    <p>
                        Le Raid HEI 2013 se déroulera cette année dans les Ardennes. Très peu connue, cette région n’en recèle pas moins 
                        de magnifiques paysages, de mystérieuses forêts que nous vous invitons à venir découvrir les 5, 6 et 7 Avril 2013.
                    </p>
                </div>
                <div class="bloc">
                    <img class="center" src="img/eve3.JPG" alt="Revin">
                </div>
                <div class="bloc">
                    <p>
                        Réservez dès à présent votre week-end et n’hésitez pas à consulter les images du précédent Raid sur l’onglet Raid 
                        HEI 2012 (qui sera bientôt disponible !!!)
                    </p>
                </div>
            </div>

<footer>
<p class="copyright"> Copyright - Raid HEI 2013 </p>
</footer>


