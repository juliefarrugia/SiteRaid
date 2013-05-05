<h1>Equipes inscrites au parcours Aventure</h1><br /><br/>


<p><br>
<b>Ce :</b> certificat Médical<br>
<b>Ca :</b> caution<br>
<b>R :</b> attestation de lecture du règlement<br>
<b>Vélo :</b> amène son vélo<br>
<b>Bus :</b> viens en bus<br>
<b>0 :</b> Non<br>
<b>1 :</b> Oui<br></p><br><br>

{foreach $ALLEQUIPE as $COURANTEQUIPE}

<center><table border="3" frame="box" bordercolor="#000000">
    
    <tr height="30">
        <td align="center" bgcolor="#00FF00"><b>{$COURANTEQUIPE->nomEquipe}</b></td>
    </tr>
    <tr height="30">
        <td align="center" bgcolor="#87CEEB"><b>Participant</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Statut</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Ecole</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Mail</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Tel</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Vélo</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Bus</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Payé</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Ce</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Ca</b></td>
        <td align="center" bgcolor="#87CEEB"><b>R</b></td>
        <td align="center" bgcolor="#87CEEB"><b>Validé</b></td>
    </tr>
    {foreach $ALLPARTICIPANT as $COURANTPARTICIPANT}
        {if ($COURANTEQUIPE->nomEquipe)==($COURANTPARTICIPANT->nomEquipe)}
    <tr height="30">
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->nomParticipant} {$COURANTPARTICIPANT->prenomParticipant}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->statutParticipant}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->ecole_entreprise}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->login}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->telParticipant}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->velo}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->bus}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->cheque}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->certifMedical}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->caution}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->reglement}</td>
        <td align="center" bgcolor="#E6E6FA">{$COURANTPARTICIPANT->validation}</td>
    </tr>
        {/if}
     {/foreach} 
    </table></center>
      {/foreach}    