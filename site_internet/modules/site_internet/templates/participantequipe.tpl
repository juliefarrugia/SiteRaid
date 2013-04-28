<h1>Votre Equipe</h1><br /><br/>

<fieldset>
<center>{formdatafull $EQUIPE}</center>
</fieldset></br></br>

{if $CHEF==1 && $PLACE!==0} <h2>En tant que chef d'équipe vous pouvez inviter des amis à rejoindre votre équipe</h2>
   {formfull $MAIL, 'site_internet~envoyerInvit@classic'}{/if}

<br>
<h3><center>Si vous souhaitez modifier certaines de vos informations, veuillez contacter le webmaster en utilisant le formulaire de contact.</center></h3>