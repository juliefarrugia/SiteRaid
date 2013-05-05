 <h1>Petites Annonces</h1><br /><br/>
 
 <table border='1'>
    
    <tr>
        <td>Recherche</td>
        <td>Type de Raid</td>
        <td>Statut</td>
        <td>Contact</td>
    </tr>

{foreach $ALLANNONCE as $COURANTANNONCE}    
    
    <tr>
        <td>{$COURANTANNONCE->recherche}</td>
        <td>{$COURANTANNONCE->typeRaid}</td>
        <td>{$COURANTANNONCE->statut}</td>
        <td>{$COURANTANNONCE->contact}</td>
    </tr>
 {/foreach} 
</table>