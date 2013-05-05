<h1>Classer votre annonce</h1>

 <center><table border="3" frame="box" bordercolor="#000000"  >
    
    <tr height="30">
        <td align="center" bgcolor="#87CEEB" width="100">Recherche</td>
        <td align="center" bgcolor="#87CEEB" width="80">Type de Raid</td>
        <td align="center" bgcolor="#87CEEB" width="80">Statut</td>
        <td align="center" bgcolor="#87CEEB" width="300">Contact</td>
    </tr>   

    <tr height="30">
        <td align="center" bgcolor="#E6E6FA" width="100"> {$ANNONCE->recherche} </td>
        <td align="center" bgcolor="#E6E6FA" width="80"> {$ANNONCE->typeRaid} </td>
        <td align="center" bgcolor="#E6E6FA" width="80"> {$ANNONCE->statut} </td>
        <td align="center" bgcolor="#E6E6FA" width="300"> {$ANNONCE->contact} </td>
    </tr>
     </table></center>
    <br><br>
    <center><a href="{jurl 'site_internet~supprimerAnnonce@classic'}"><button>Classer l'annonce</button></a></center>