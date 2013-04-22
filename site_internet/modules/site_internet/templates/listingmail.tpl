<h1>Listing Mail</h1>

       <br>
        <br>
        <h2>Listing de l'équipe organisatrice</h2>
            <fieldset>
                {foreach $ALLORGA as $COURANTORGA}{$COURANTORGA->login} ; {/foreach}
            </fieldset>
        <h2>Listing de tous les participants</h2>
            <fieldset>
                {foreach $ALLPARTICIPANT as $COURANTPARTICIPANT}{$COURANTPARTICIPANT->login} ; {/foreach}
            </fieldset>
         <h2>Listing participants parcours aventure</h2>
            <fieldset>
                {foreach $ALLPARTICIPANTA as $COURANTPARTICIPANTA}{$COURANTPARTICIPANTA->login1} ; {$COURANTPARTICIPANTA->login2} ; {$COURANTPARTICIPANTA->login3} ; {$COURANTPARTICIPANTA->login4} ; {/foreach}
            </fieldset>
         <h2>Listing participants parcours expert</h2>
            <fieldset>
                {foreach $ALLPARTICIPANTE as $COURANTPARTICIPANTE}{$COURANTPARTICIPANTE->login1} ; {$COURANTPARTICIPANTE->login2} ; {$COURANTPARTICIPANTE->login3} ; {$COURANTPARTICIPANTE->login4} ; {/foreach}
            </fieldset>
         <h2>Listing participants personne venant en bus et ayant leur vélo</h2>
            <fieldset>
                {foreach $ALLPARTICIPANTBV as $COURANTPARTICIPANTBV}{$COURANTPARTICIPANTBV->login} ; {/foreach}
            </fieldset>
         <h2>Listing participants personne venant en bus</h2>
            <fieldset>
                {foreach $ALLPARTICIPANTB as $COURANTPARTICIPANTB}{$COURANTPARTICIPANTB->login} ; {/foreach}
            </fieldset>
         <h2>Listing participants personne venant par leurs propres moyens</h2>
            <fieldset>
                {foreach $ALLPARTICIPANTM as $COURANTPARTICIPANTM}{$COURANTPARTICIPANTM->login} ; {/foreach}
            </fieldset>