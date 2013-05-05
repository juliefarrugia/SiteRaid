<h1>Equipes inscrites au parcours Aventure</h1><br /><br/>


{foreach $ALLEQUIPE as $COURANTEQUIPE}

<table border='2'>
    
    <tr>
        <td>{$COURANTEQUIPE->nomEquipe}</td>
    </tr>
    <tr>
        <td>Participant</td>
        <td>Sexe</td>
        <td>Statut</td>
        <td>Ecole / Entreprise</td>
        <td>Mail</td>
        <td>Tel</td>
        <td>Maillot</td>
        <td>Amène son vélo ?</td>
        <td>Départ en bus ?</td>
        <td>Paiement reçu ?</td>
        <td>Certificat reçu ?</td>
        <td>Caution reçu ?</td>
        <td>Règlement lu ? </td>
        <td>Validation</td>
    </tr>
    {foreach $ALLPARTICIPANT as $COURANTPARTICIPANT}
        {if ($COURANTEQUIPE->nomEquipe)==($COURANTPARTICIPANT->nomEquipe)}
    <tr>
        <td>{$COURANTPARTICIPANT->nomParticipant} {$COURANTPARTICIPANT->prenomParticipant}</td>
        <td>{$COURANTPARTICIPANT->sexeParticipant}</td>
        <td>{$COURANTPARTICIPANT->statutParticipant}</td>
        <td>{$COURANTPARTICIPANT->ecole_entreprise}</td>
        <td>{$COURANTPARTICIPANT->login}</td>
        <td>{$COURANTPARTICIPANT->telParticipant}</td>
        <td>{$COURANTPARTICIPANT->tailleMaillot}</td>
        <td>{$COURANTPARTICIPANT->velo}</td>
        <td>{$COURANTPARTICIPANT->bus}</td>
        <td>{$COURANTPARTICIPANT->cheque}</td>
        <td>{$COURANTPARTICIPANT->certifMedical}</td>
        <td>{$COURANTPARTICIPANT->caution}</td>
        <td>{$COURANTPARTICIPANT->reglement}</td>
        <td>{$COURANTPARTICIPANT->validation}</td>
    </tr>
        {/if}
     {/foreach} 
</table>
      {/foreach}    