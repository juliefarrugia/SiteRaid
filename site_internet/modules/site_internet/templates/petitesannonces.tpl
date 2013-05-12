 <h1>Petites Annonces</h1><br/><br/>
 
 <center><table border="3" frame="box" bordercolor="#000000"  >
    
    <tr height="30">
        <td align="center" bgcolor="#87CEEB" width="100">Recherche</td>
        <td align="center" bgcolor="#87CEEB" width="80">Type de Raid</td>
        <td align="center" bgcolor="#87CEEB" width="80">Statut</td>
        <td align="center" bgcolor="#87CEEB" width="300">Contact</td>
    </tr>

{foreach $ALLANNONCE as $COURANTANNONCE}    
    
    <tr height="30">
        <td align="center" bgcolor="#E6E6FA" width="100"> {$COURANTANNONCE->recherche} </td>
        <td align="center" bgcolor="#E6E6FA" width="80"> {$COURANTANNONCE->typeRaid} </td>
        <td align="center" bgcolor="#E6E6FA" width="80"> {$COURANTANNONCE->statut} </td>
        <td align="center" bgcolor="#E6E6FA" width="300"> {$COURANTANNONCE->contact} </td>
    </tr>
 {/foreach} 
     </table></center>