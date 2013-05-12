<div class="colonne">
<aside class="connexion">



<h2 id="titleForm">{$BIENVENUE}</h2>


    
{if $PROFIL==1} <div>
     
     <ul>
     <li> <a title="recap" href="{jurl 'site_internet~accueil@classic', array('page'=>'recapInscriptions')}">Récapitulatif des inscriptions</a></li>
     <li> <a title="equipeAventure" href="{jurl 'site_internet~accueil@classic', array('page'=>'equipeAventure')}">Equipes Parcours Aventure</a></li>
     <li> <a title="equipeExpert" href="{jurl 'site_internet~accueil@classic', array('page'=>'equipeExpert')}">Equipes Parcours Expert</a></li>
     <li> <a title="listingMail" href="{jurl 'site_internet~accueil@classic', array('page'=>'listingMail')}">Listing Mail</a></li>
     <li><a title="changerMDP" href="{jurl 'site_internet~accueil@classic', array('page'=>'changerMDP')}">Changer mon mot de passe</a></li>
     </ul>
    
     <center><a type='submit' title="deconnexion" href="{jurl 'site_internet~deconnexion@classic'}">Déconnexion</a></center>
     
    </div> {/if}

{if $PROFIL==3} <div> 
    
     <ul>
     <li> <a title="recap" href="{jurl 'site_internet~accueil@classic', array('page'=>'recapInscriptions')}">Récapitulatif des inscriptions</a></li>
     <li> <a title="ajouterParticipant" href="{jurl 'site_internet~accueil@classic', array('page'=>'ajouterParticipant')}">Ajouter un participant</a></li>
     <li> <a title="ajouterEquipe" href="{jurl 'site_internet~accueil@classic', array('page'=>'ajouterEquipe')}">Ajouter une équipe</a></li>
     <li> <a title="modifierParticipant" href="{jurl 'site_internet~accueil@classic', array('page'=>'modifierParticipant')}">Modifier/Supprimer participant</a></li>
     <li> <a title="modifierEquipe" href="{jurl 'site_internet~accueil@classic', array('page'=>'modifierEquipe')}">Modifier/Supprimer équipe</a></li>
     <li> <a title="ajouterOrganisateur" href="{jurl 'site_internet~accueil@classic', array('page'=>'ajouterOrganisateur')}">Gérer les organisateurs</a></li>
     
     </ul>
    
<center><a title="deconnexion" href="{jurl 'site_internet~deconnexion@classic'}"><button>Déconnexion</button></a></center>
    
    
    </div>{/if}
    
{if $PROFIL==2} <div> 
    
     <ul>
     <li> <a title="accueilP" href="{jurl 'site_internet~accueil@classic', array('page'=>'profilParticipant')}">Accueil Participant</a></li>
     <li> <a title="etat" href="{jurl 'site_internet~accueil@classic', array('page'=>'participantEtat')}">Etat de l'inscription</a></li>
     <li> <a title="infos" href="{jurl 'site_internet~accueil@classic', array('page'=>'participantInformations')}">Mes informations</a></li>
     <li><a title="infosequipe" href="{jurl 'site_internet~accueil@classic', array('page'=>'participantEquipe')}">Mon Equipe</a></li>
     <li><a title="changerMDP" href="{jurl 'site_internet~accueil@classic', array('page'=>'changerMDP')}">Changer mon mot de passe</a></li>
     <li><a title="formContact" href="{jurl 'site_internet~accueil@classic', array('page'=>'formContact')}">Formulaire de contact</a></li>
     
    {if $CHEF==1}
        {if $ANNONCE==0}<li><a title="ajouterAnnonce" href="{jurl 'site_internet~accueil@classic', array('page'=>'ajouterAnnonce')}">Ajouter une petite annonce</a></li>
        {else if $ANNONCE==1}<li><a title="classerAnnonce" href="{jurl 'site_internet~accueil@classic', array('page'=>'classerAnnonce')}">Classer votre annonce</a></li>{/if}{/if}
     </ul>

        <center><a title="deconnexion" href="{jurl 'site_internet~deconnexion@classic'}"><button>Déconnexion</button></a></center>
     
    </div> {/if}
    
{if $OK==false}
<h2 id="titleForm">Se connecter</h2>
        <fieldset>
            <div>
                <center> {formfull $CONNEXION, 'site_internet~connexion@classic'}</center>
                <center><i><a title="mdpOublie" href="{jurl 'site_internet~index@classic', array('page'=>'mdpOublie')}">Mot de passe oublié ?</a></i></center>
         
            </div></fieldset>
                <br>
            <center><a title="inscrire" href="{jurl 'site_internet~index@classic', array('page'=>'inscription')}">S'inscrire</a></center>{/if}
</aside>

            
    <aside class="inscrits">
        <h2>Dernières équipes inscrites</h2>
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
            <br/>
                <p>
        Réservez dès à présent les 5, 6 et 7 avril 2013 pour vivre une expérience magique : la 20ème édition du Raid HEI !! Avec l’ensemble de mon équipe, nous avons voulu donner une dimension supplémentaire à ce Raid en l’organisant dans les Ardennes, région vallonnée très propice à la pratique des sports extérieures, offrant des challenges adaptés au niveau de chacun.
            <br/>
            <br/>
        C’est avec plaisir que toute l’équipe se mobilise depuis le mois de juin dernier pour vous faire vivre une expérience inoubliable.
            <br/>
            <br/>
        En attendant de vous voir sur les parcours du RAID HEI 2013 je tiens à vous remercier de la confiance que vous nous accordez pour que cet événement se déroule dans un esprit convivial et sportif.
            <br/>
            <br/>
        Clément Lorrain
                </p>
    </aside>
</div>
