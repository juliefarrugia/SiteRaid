<?php

class defaultCtrl extends jController {
    
    public $pluginParams = array(
        '*'=>array('auth.required'=>false),
        'index'=>array('auth.required'=>false),
        'accueil'=>array('auth.required'=>true),
        'chargerEquipe'=>array('auth.required'=>true),
        'chargerParticipant'=>array('auth.required'=>true),
        'supprimerParticipant'=>array('auth.required'=>true),
        'supprimerEquipe'=>array('auth.required'=>true),
        'saveEquipeAdmin'=>array('auth.required'=>true),
        'saveParticipantAdmin'=>array('auth.required'=>true),
        'chargerParticipant'=>array('auth.required'=>true),
        'saveOrga'=>array('auth.required'=>true),
        'saveParticipantBIS'=>array('auth.required'=>true),
        'saveEquipeBIS'=>array('auth.required'=>true),
        'changeMDP'=>array('auth.required'=>true),
        'envoyerInvit'=>array('auth.required'=>true),
        'envoyerMailContact'=>array('auth.required'=>true),
        'suprimerOrga'=>array('auth.required'=>true),
        'saveAnnonce'=>array('auth.required'=>true),
        'supprimerAnnonce'=>array('auth.required'=>true),
        'modifiermdpequipe'=>array('auth.required'=>true),
     );

    function index() {

        $rep = $this->getResponse('html');
        $rep->bodyTpl ="main";
        $page=$this->param('page');
        
        if ($page=='raidLieu'){$rep->body->assignZone('PRINCIPAL', 'raidlieu');}
        else if ($page=='raidInfos'){$rep->body->assignZone('PRINCIPAL', 'raidinfos');}
        else if ($page=='raidMateriel'){$rep->body->assignZone('PRINCIPAL', 'raidmateriel');}
        else if ($page=='raidEpreuves'){$rep->body->assignZone('PRINCIPAL', 'raidepreuves');}
        else if ($page=='RELLieu'){$rep->body->assignZone('PRINCIPAL', 'rellieu');}
        else if ($page=='RELEcoles'){$rep->body->assignZone('PRINCIPAL', 'relecoles');}
        else if ($page=='RELInfos'){$rep->body->assignZone('PRINCIPAL', 'relinfos');}
        else if ($page=='equipe'){$rep->body->assignZone('PRINCIPAL', 'equipe');}
        else if ($page=='raidsprecedents'){$rep->body->assignZone('PRINCIPAL', 'raidsprecedents');}
        else if ($page=='environnement'){$rep->body->assignZone('PRINCIPAL', 'environnement');}
        else if ($page=='partenaire'){$rep->body->assignZone('PRINCIPAL', 'partenaire');}
        else if ($page=='devenirpartenaire'){$rep->body->assignZone('PRINCIPAL', 'devenirpartenaire');}
        else if ($page=='photo'){$rep->body->assignZone('PRINCIPAL', 'photo');}
        else if ($page=='video'){$rep->body->assignZone('PRINCIPAL', 'video');}
        else if ($page=='contact'){$rep->body->assignZone('PRINCIPAL', 'contact');}
        else if ($page=='inscription'){$rep->body->assignZone('PRINCIPAL', 'inscription');}
        else if ($page=='creationEquipe'){$rep->body->assignZone('PRINCIPAL', 'creationequipe');}
        else if ($page=='joindreEquipe'){$rep->body->assignZone('PRINCIPAL', 'joindreequipe');}
        else if ($page=='nouveauParticipant'){$rep->body->assignZone('PRINCIPAL', 'nouveauparticipant');}
        else if ($page=='mdpOublie'){$rep->body->assignZone('PRINCIPAL', 'mdpoublie');}
        else if ($page=='petitesAnnonces'){$rep->body->assignZone('PRINCIPAL', 'petitesannonces');}

        else {$rep->body->assignZone('PRINCIPAL', 'accueil');}    
            
        return $rep;
    }
    
    function connexion (){
        
        $login=$this->param('login');
        $password=$this->param('password');
        jAuth::login($login, $password,true);
        
        if (jAuth::isConnected()) {
            return $this->accueil();}
            else{return $this ->erreur();}
        }
    
    function deconnexion (){
        
            jAuth::logout();
            return $this->index();
    }
   
    function erreur(){
       
        $rep = $this->getResponse('html');
        $rep->bodyTpl ="main";
        $rep->body->assignZone('PRINCIPAL', 'erreur');
        return $rep;
    }
    
    function accueil(){
         
         $rep = $this->getResponse('html');
         $rep->bodyTpl ="main";
         $utilisateur = jAuth::getUserSession();
         $profil = $utilisateur->profil; 
         $log =$utilisateur->login; 
         $participantFactory = jDao::get("site_internet~participant");
         $participant = $participantFactory->get($log);
         $equipe =$participant->nomEquipe;
         $annonce=$participant->annonce;
         $equipeFactory = jDao::get("site_internet~equipe");
         $eq= $equipeFactory->get($equipe);
         if($log==($eq->login1)){ $chef="1";};
         
         
         $page=$this->param('page');
         
         if ($profil=='3'){if ($page=='modifierParticipant'){$rep->body->assignZone('PRINCIPAL', 'modifierparticipant');}
            else if ($page=='modifierEquipe'){$rep->body->assignZone('PRINCIPAL', 'modifierequipe');}
            else if ($page=='ajouterOrganisateur'){$rep->body->assignZone('PRINCIPAL', 'ajouterorganisateur');}
            else if ($page=='ajouterParticipant'){$rep->body->assignZone('PRINCIPAL', 'ajoutparticipant');}
            else if ($page=='ajouterEquipe'){$rep->body->assignZone('PRINCIPAL', 'ajoutequipe');}
            else {$rep->body->assignZone('PRINCIPAL', 'recapinscriptions');};}
         
         if($profil=='1'){if ($page=='equipeExpert'){$rep->body->assignZone('PRINCIPAL', 'equipeexpert');}
            else if ($page=='equipeAventure'){$rep->body->assignZone('PRINCIPAL', 'equipeaventure');}
            else if ($page=='listingMail'){$rep->body->assignZone('PRINCIPAL', 'listingmail');}
            else if ($page=='changerMDP'){$rep->body->assignZone('PRINCIPAL', 'changermdp');}
            else {$rep->body->assignZone('PRINCIPAL', 'recapinscriptions');};}

         if ($profil=='2'){if ($page=='participantEtat'){$rep->body->assignZone('PRINCIPAL', 'participantetat');}
            else if ($page=='participantInformations'){$rep->body->assignZone('PRINCIPAL', 'participantinformations');}
            else if ($page=='participantEquipe'){$rep->body->assignZone('PRINCIPAL', 'participantequipe');}
            else if ($page=='changerMDP'){$rep->body->assignZone('PRINCIPAL', 'changermdp');}
            else if ($page=='formContact'){$rep->body->assignZone('PRINCIPAL', 'formcontact');}
            else if ($chef==1 && $page=='ajouterAnnonce'){$rep->body->assignZone('PRINCIPAL', 'ajouterannonce');}
            else if ($chef==1 && $annonce=1 && $page=='classerAnnonce'){$rep->body->assignZone('PRINCIPAL', 'classerannonce');}
            else{$rep->body->assignZone('PRINCIPAL', 'profilparticipant');};
            }

        return $rep ;
     }
     
    function chargerParticipant(){
         
         $rep = $this->getResponse('html');
         $rep->bodyTpl ="main";
         $login=  $this->param('login');
         $rep->body->assignZone('PRINCIPAL', 'modifierparticipantbis',array('login'=>$login));
         return $rep ;
     }

    function chargerEquipe(){
         
         $rep = $this->getResponse('html');
         
         $rep->bodyTpl ="main";
         $nomEquipe=  $this->param('nomEquipe');
         $rep->body->assignZone('PRINCIPAL', 'modifierequipebis',array('nomEquipe'=>$nomEquipe));
         return $rep ;
     }
     
    function supprimerOrga(){
        $utilisateurFactory = jDao::get("site_internet~utilisateur");
        $utilisateurFactory->delete($this->param('login'));
        return $this->index();
    }
     
    function supprimerParticipant(){

       $participantFactory = jDao::get("site_internet~participant");
       $part=$participantFactory->get($this->param('login'));
       
       $utilisateurFactory = jDao::get("site_internet~utilisateur");
      
        $equipeFactory = jDao::get("site_internet~equipe");
        $record = $equipeFactory->get($part->nomEquipe);
        $log=$this->param('login');
        
        if($record->login2==$log){$record->login2="";}
        else if($record->login3==$log){$record->login3="";}
        else if($record->login4==$log){$record->login4="";}
        else if($record->login1==$log){
            if($record->login2!==""&&$record->login2!==null){$record->login1=$record->login2;$record->login2="";$eq="0";}
            else if($record->login3!==""&&$record->login3!==null){$record->login1=$record->login3;$record->login3="";$eq="0";}
            else if($record->login4!==""&&$record->login4!==null){$record->login1=$record->login4;$record->login4="";$eq="0";}
            else {$eq="1";};
           
        };
        
        if ($record->check()) { $participantFactory->delete($this->param('login')); 
                                $utilisateurFactory->delete($this->param('login'));
                                if($eq=="1"){$equipeFactory->delete($part->nomEquipe);}
                                else if ($eq=="0") {$equipeFactory->update($record);};
                                return $this->index();}
        else { return $this->erreur();}

     }
     
    function supprimerEquipe(){

        
        $equipeFactory = jDao::get("site_internet~equipe");
        $nomE=$equipeFactory->get($this->param('nomEquipe'));
        
        $participantFactory = jDao::get("site_internet~participant");
        $utilisateurFactory = jDao::get("site_internet~utilisateur");
        
        $participantFactory->delete($nomE->login1); 
        $utilisateurFactory->delete($nomE->login1);
        $participantFactory->delete($nomE->login2); 
        $utilisateurFactory->delete($nomE->login2);
        $participantFactory->delete($nomE->login3); 
        $utilisateurFactory->delete($nomE->login3);
        $participantFactory->delete($nomE->login4); 
        $utilisateurFactory->delete($nomE->login4);
        $equipeFactory->delete($this->param('nomEquipe'));

        return $this->index();
     }

    function saveEquipe() {
        
        $newUser = jAuth::createUserObject ($this->param('login'), $this->param('password'));
        $newUser->profil = "2";
        
        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   
        
        $record = jDao::createRecord("site_internet~participant");
        $record2 = jDao::createRecord("site_internet~equipe");
        
        $record->login = $this->param('login');
        $record->nomParticipant= $this->param('nomParticipant');
        $record->prenomParticipant = $this->param('prenomParticipant');
        $record->sexeParticipant = $this->param('sexeParticipant');
        $record->telParticipant = $this->param('telParticipant');
        $record->statutParticipant= $this->param('statutParticipant');
        $record->ecole_entreprise = $this->param('ecole_entreprise');
        $record->tailleMaillot = $this->param('tailleMaillot');
        $record->nomUrgence = $this->param('nomUrgence');
        $record->telUrgence = $this->param('telUrgence');
        $record->velo= $this->param('velo');
        $record->bus = $this->param('bus');
        $record->prixpaye="";
        $record->annonce="";
        $record->certifMedical = "0";
        $record->reglement = "0";
        $record->cheque = "0";
        $record->caution = "0";
        $record->validation = "0";
        $record->nomEquipe = $this->param('nomEquipe');
        $record2->nomEquipe = $this->param('nomEquipe');
        $record2->passwordEquipe = $this->param('passwordEquipe');
        $record2->telEquipe= $this->param('telEquipe');
        $record2->typeRaid = $this->param('typeRaid');
        $record2->login1= $this->param('login');
        
        if ($record->check()&& $record2->check()) { 
            jAuth::saveNewUser($newUser);
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->insert($record2);
            
            $mail = new jMailer();
            $tpl = $mail->Tpl('site_internet~mailConfirmationInscriptionChefEquipe');
            $tpl->assign('email', $record->login);  
            $tpl->assign('MDP', $this->param('password'));
            $tpl->assign('equipe', $record->nomEquipe); 
            $tpl->assign('mdpequipe', $record2->passwordEquipe); 
            $mail->Send();
            
            if ($record2->login2!=""){
                $mail = new jMailer();
                $tpl = $mail->Tpl('site_internet~mailRejoindreEquipe');
                $tpl->assign('email', $this->param('login2'));
                $tpl->assign('PRENOM', $this->param('prenomParticipant')); 
                $tpl->assign('NOM', $this->param('nomParticipant')); 
                $tpl->assign('EQUIPE', $this->param('nomEquipe')); 
                $tpl->assign('MDPE', $this->param('passwordEquipe'));
                $mail->Send();
            }
            if ($record2->login3!=""){
                $mail = new jMailer();
                $tpl = $mail->Tpl('site_internet~mailRejoindreEquipe');
                $tpl->assign('email', $this->param('login3'));
                $tpl->assign('PRENOM', $this->param('prenomParticipant')); 
                $tpl->assign('NOM', $this->param('nomParticipant')); 
                $tpl->assign('EQUIPE', $this->param('nomEquipe'));
                $tpl->assign('MDPE', $this->param('passwordEquipe'));
                $mail->Send();  
            }
            if ($record2->login4!=""){
                $mail = new jMailer();
                $tpl = $mail->Tpl('site_internet~mailRejoindreEquipe');
                $tpl->assign('email', $this->param('login4'));
                $tpl->assign('PRENOM', $this->param('prenomParticipant')); 
                $tpl->assign('NOM', $this->param('nomParticipant')); 
                $tpl->assign('EQUIPE', $this->param('nomEquipe')); 
                $tpl->assign('MDPE', $this->param('passwordEquipe'));
                $mail->Send();
            }
            
            return $this->connexion();}
        else { 
            return $this->erreur();
            
            }}                    
            
    function rejoindreEquipe () {
        
           $equipeFactory = jDao::get("site_internet~equipe");
           $equipe= $equipeFactory->get($this->param('loginE'));
           if ($equipe->login2==""||$equipe->login3==""||$equipe->login4=="") {

           if (jApp::coord()->request->isAjax()){
               
               $equipeFactory = jDao::get("equipe");
               $conditions= jDao::createConditions();
               $conditions->addCondition('nomEquipe','=',$this->param('loginE'));
               $conditions->addCondition('passwordEquipe','=',$this->param('passwordE'));
               
               $equipeList = $equipeFactory->findBy($conditions);
               $equipes = $equipeList->FetchAll();
              
           if (sizeof ($equipes)==1 ){
                
                $rep=$this->getResponse('json');
                $rep->data=array('nomEquipe'=>$equipes[0]->nomEquipe);
                
                
                return $rep;}}
           
            
           else {return null;}} 

    } 
    
    function saveParticipant() {
        
        $newUser = jAuth::createUserObject ($this->param('login'), $this->param('password'));
        $newUser->profil = "2";

        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   

        $record = jDao::createRecord("site_internet~participant");
        $record2 = $inscriptionEquipe->get($this->param('nomEquipe'));
        
        $record->login = $this->param('login');
        $record->nomEquipe = $this->param('nomEquipe');
        $record->nomParticipant= $this->param('nomParticipant');
        $record->prenomParticipant = $this->param('prenomParticipant');
        $record->sexeParticipant = $this->param('sexeParticipant');
        $record->telParticipant = $this->param('telParticipant');
        $record->statutParticipant= $this->param('statutParticipant');
        $record->ecole_entreprise = $this->param('ecole_entreprise');
        $record->tailleMaillot = $this->param('tailleMaillot');
        $record->nomUrgence = $this->param('nomUrgence');
        $record->telUrgence = $this->param('telUrgence');
        $record->velo= $this->param('velo');
        $record->bus = $this->param('bus');
        $record->prixpaye="";
        $record->annonce="";
        $record->certifMedical ="0";
        $record->reglement =" 0";
        $record->cheque ="0";
        $record->caution = "0";
        $record->validation = "0";

        if ($record2->login2==NULL){ $record2->login2= $this->param('login');}
        else if ($record2->login3==NULL){ $record2->login3= $this->param('login');}
        else if ($record2->login4==NULL){ $record2->login4= $this->param('login');}     
        
        if ($record->check()&& $record2->check() ) { 
            jAuth::saveNewUser($newUser);
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->update($record2);
            
            $mail = new jMailer();
            $tpl = $mail->Tpl('site_internet~mailConfirmationInscription');
            $tpl->assign('email', $record->login);   
            $tpl->assign('MDP', $this->param('password'));   
            $mail->Send();
            
            return $this->connexion();}
        else { 
            return $this->erreur();
            
            }}    
 
    function saveParticipantAdmin() {
          
         $form=  jForms::fill('site_internet~participantInfosAdmin', $this->param('login'));
 
        if ($form->check()) {
            $result = $form->prepareDaoFromControls('site_internet~participant');
            $participantFactory=$result['dao'];
            $courantparticipant=$result['daorec'];
            $participantFactory->update($courantparticipant);}

        return $this->accueil();
            
            }     
            
    function saveEquipeAdmin() {
          
        $form=  jForms::fill('site_internet~equipeInfosAdmin', $this->param('nomEquipe'));
 
        if ($form->check()) {
            $result = $form->prepareDaoFromControls('site_internet~equipe');
            $equipeFactory=$result['dao'];
            $courantequipe=$result['daorec'];
            $equipeFactory->update($courantequipe);}

        return $this->accueil();
            
            }            
            
    function saveOrga() {
        $pass=jAuth::getRandomPassword();
        $adresse=$this->param('login');
        $newUser = jAuth::createUserObject ($adresse, $pass);
        $newUser->profil = "1";
        $ok = jAuth::saveNewUser($newUser);     
        
        if ($ok==true) {  
            $mail = new jMailer();
            $tpl = $mail->Tpl('site_internet~mailOrga');
            $tpl->assign('email', $adresse);
            $tpl->assign('MDP', $pass);
            $mail->Send();
            return $this->accueil();}
        else { 
            return $this->erreur();}
            
            } 
             
    function saveParticipantBIS() {
        
        $pass=jAuth::getRandomPassword();
        $newUser = jAuth::createUserObject ($this->param('login'), $pass);
        $newUser->profil = "2";

        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   

        $record = jDao::createRecord("site_internet~participant");
        $record2 = $inscriptionEquipe->get($this->param('nomEquipe'));
        
        $record->login = $this->param('login');
        $record->nomEquipe = $this->param('nomEquipe');
        $record->nomParticipant= $this->param('nomParticipant');
        $record->prenomParticipant = $this->param('prenomParticipant');
        $record->sexeParticipant = $this->param('sexeParticipant');
        $record->telParticipant = $this->param('telParticipant');
        $record->statutParticipant= $this->param('statutParticipant');
        $record->ecole_entreprise = $this->param('ecole_entreprise');
        $record->tailleMaillot = $this->param('tailleMaillot');
        $record->nomUrgence = $this->param('nomUrgence');
        $record->telUrgence = $this->param('telUrgence');
        $record->velo= $this->param('velo');
        $record->bus = $this->param('bus');
        $record->prixpaye=$this->param('prixpaye');
        $record->annonce="";
        $record->certifMedical =$this->param('certifMedical');
        $record->reglement =$this->param('reglement');
        $record->cheque =$this->param('cheque');
        $record->caution = $this->param('caution');
        $record->validation = $this->param('validation');

        if ($record2->login2==NULL){ $record2->login2= $this->param('login');}
        else if ($record2->login3==NULL){ $record2->login3= $this->param('login');}
        else if ($record2->login4==NULL){ $record2->login4= $this->param('login');}     
        
        if ($record->check()&& $record2->check() ) { 
            jAuth::saveNewUser($newUser);
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->update($record2);
            
            $mail = new jMailer();
            $tpl = $mail->Tpl('site_internet~mailConfirmationInscription');
            $tpl->assign('email', $record->login);   
            $tpl->assign('MDP', $pass);   
            $mail->Send();
            
            return $this->accueil();}
        else { 
            return $this->erreur();
            
            }}    
       
    function saveEquipeBIS() {
        
        $pass=jAuth::getRandomPassword();
        $pass2=jAuth::getRandomPassword();
        $newUser = jAuth::createUserObject ($this->param('login'), $pass);
        $newUser->profil = "2";
        
        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   
        
        $record = jDao::createRecord("site_internet~participant");
        $record2 = jDao::createRecord("site_internet~equipe");
        
        $record->login = $this->param('login');
        $record->nomParticipant= $this->param('nomParticipant');
        $record->prenomParticipant = $this->param('prenomParticipant');
        $record->sexeParticipant = $this->param('sexeParticipant');
        $record->telParticipant = $this->param('telParticipant');
        $record->statutParticipant= $this->param('statutParticipant');
        $record->ecole_entreprise = $this->param('ecole_entreprise');
        $record->tailleMaillot = $this->param('tailleMaillot');
        $record->nomUrgence = $this->param('nomUrgence');
        $record->telUrgence = $this->param('telUrgence');
        $record->velo= $this->param('velo');
        $record->bus = $this->param('bus');
        $record->prixpaye=$this->param('prixpaye');
        $record->annonce="";
        $record->certifMedical =$this->param('certifMedical');
        $record->reglement =$this->param('reglement');
        $record->cheque =$this->param('cheque');
        $record->caution = $this->param('caution');
        $record->validation = $this->param('validation');
        $record->nomEquipe = $this->param('nomEquipe');
        $record2->nomEquipe = $this->param('nomEquipe');
        $record2->passwordEquipe = $pass2;
        $record2->telEquipe= $this->param('telEquipe');
        $record2->typeRaid = $this->param('typeRaid');
        $record2->login1= $this->param('login');
     
        if ($record->check()&& $record2->check() ) { 
            jAuth::saveNewUser($newUser);
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->insert($record2);
            
            $mail = new jMailer();
            $tpl = $mail->Tpl('site_internet~mailConfirmationInscriptionChefEquipe');
            $tpl->assign('email', $record->login); 
            $tpl->assign('MDP', $pass);  
            $tpl->assign('equipe', $record->nomEquipe); 
            $tpl->assign('mdpequipe', $pass2); 
            $mail->Send();
            
            if ($record2->login2!=""){
                $mail = new jMailer();
                $tpl = $mail->Tpl('site_internet~mailRejoindreEquipe');
                $tpl->assign('email', $this->param('login2'));
                $tpl->assign('PRENOM', $this->param('prenomParticipant')); 
                $tpl->assign('NOM', $this->param('nomParticipant')); 
                $tpl->assign('EQUIPE', $this->param('nomEquipe')); 
                $tpl->assign('MDPE', $pass2);
                $mail->Send();
            }
            if ($record2->login3!=""){
                $mail = new jMailer();
                $tpl = $mail->Tpl('site_internet~mailRejoindreEquipe');
                $tpl->assign('email', $this->param('login3'));
                $tpl->assign('PRENOM', $this->param('prenomParticipant')); 
                $tpl->assign('NOM', $this->param('nomParticipant')); 
                $tpl->assign('EQUIPE', $this->param('nomEquipe')); 
                $tpl->assign('MDPE', $pass2);
                $mail->Send();  
            }
            if ($record2->login4!=""){
                $mail = new jMailer();
                $tpl = $mail->Tpl('site_internet~mailRejoindreEquipe');
                $tpl->assign('email', $this->param('login4'));
                $tpl->assign('PRENOM', $this->param('prenomParticipant')); 
                $tpl->assign('NOM', $this->param('nomParticipant')); 
                $tpl->assign('EQUIPE', $this->param('nomEquipe')); 
                $tpl->assign('MDPE', $pass2);
                $mail->Send();
            }
            
            return $this->accueil();}
        else { 
            return $this->erreur();}
            
      }            
                     
    function changeMDP(){
          
         $utilisateur = jAuth::getUserSession();
         $log = $utilisateur->login;
         $ok = jAuth::verifyPassword($log, $this->param('password'));
         if ($ok==true){jAuth::changePassword($log,$this->param('passwordN'));
         return $this->accueil();}
         else return $this->erreur(); 
          
      }      
         
    function envoyerMailContact(){ 
    
        $utilisateur = jAuth::getUserSession();
        $adresse = $utilisateur->login;
        $participantFactory = jDao::get("site_internet~participant");
        $participant = $participantFactory->get($adresse);
        $name = $participant->nomParticipant;
        $prenom = $participant->prenomParticipant;
        $message=$this->param('message');
        $object=$this->param('sujet');
        $mail = new jMailer();
        $tpl = $mail->Tpl('site_internet~mailcontact');
        $tpl->assign('adresse', $adresse);
        $tpl->assign('name', $name);
        $tpl->assign('prenom', $prenom);
        $tpl->assign('message', $message);
        $tpl->assign('object', $object);
        $mail->Send();
        return $this->accueil();
        
        }
    
    function envoyerMailMotdepasseOublie(){ 
        
        $pass=jAuth::getRandomPassword();
        $adresse=$this->param('login');
        jAuth::changePassword($adresse,$pass);
        $mail = new jMailer();
        $tpl = $mail->Tpl('site_internet~mailMDPoublie');
        $tpl->assign('email', $adresse);
        $tpl->assign('MDP', $pass);
        $mail->Send();
        return $this->index();
     }
    
    function envoyerMailContact2(){ 
    
        $adresse = $this->param('mail');
        $name = $this->param('nom');
        $prenom = $this->param('prenom');
        $message=$this->param('message');
        $object=$this->param('sujet');
        $mail = new jMailer();
        $tpl = $mail->Tpl('site_internet~mailcontact');
        $tpl->assign('adresse', $adresse);
        $tpl->assign('prenom', $prenom);
        $tpl->assign('name', $name);
        $tpl->assign('message', $message);
        $tpl->assign('object', $object);
        $mail->Send();
        return $this->index();
     }
     
    function envoyerInvit(){
                
        $utilisateur = jAuth::getUserSession();
        $log = $utilisateur->login; 
        $participantFactory = jDao::get("site_internet~participant");
        $participant = $participantFactory->get($log);
        $equipeFactory = jDao::get("site_internet~equipe");
        $equipe= $equipeFactory->get($participant->nomEquipe);
        $mail = new jMailer();
        $tpl = $mail->Tpl('site_internet~mailRejoindreEquipe');
        $tpl->assign('email', $this->param('mail'));
        $tpl->assign('PRENOM', $participant->nomParticipant); 
        $tpl->assign('NOM', $participant->nomParticipant); 
        $tpl->assign('EQUIPE', $participant->nomEquipe); 
        $tpl->assign('MDPE', $equipe->passwordEquipe);
        $mail->Send();
        return $this->accueil();
         
     }
     
    function saveAnnonce(){
        
        $utilisateur = jAuth::getUserSession();
        $log = $utilisateur->login; 
        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionAnnonce = jDao::get("site_internet~annonce");
        $record = jDao::createRecord("site_internet~annonce");
        $record2 = $inscriptionParticipant->get($log);
        
        $record->id =$this->param('id');
        $record->login = $log;
        $record->recherche = $this->param('recherche');
        $record->typeRaid = $this->param('typeRaid');
        $record->contact= $this->param('contact');
        $record->statut = "En cours";
        $record2->annonce="1";
        
        if ($record->check()) { 

            $inscriptionAnnonce->insert($record);
            $inscriptionParticipant->update($record2);
            return $this->accueil();}
      
        else { 
            return $this->erreur();
            
            }}    
     
    function supprimerAnnonce(){
        
        $utilisateur = jAuth::getUserSession();
        $log = $utilisateur->login; 
        
        $annoncesFactory = jDao::get("annonce");
        $annonces = $annoncesFactory->findByC($log);
        $id=$annonces->id;

        $inscriptionParticipant = jDao::get("site_internet~participant");
        $record = $annoncesFactory->get($id);
        $record2 = $inscriptionParticipant->get($log);
        
        $record->statut = "Classee";
        $record2->annonce="0";

        $annoncesFactory->update($record);
        $inscriptionParticipant->update($record2);
        return $this->accueil();}
    
    function modifiermdpequipe(){
        
        $utilisateur = jAuth::getUserSession();
        $log = $utilisateur->login; 
        $participantFactory = jDao::get("site_internet~participant");
        $participant = $participantFactory->get($log);
        $equipe =$participant->nomEquipe;
        
        $equipeFactory = jDao::get("site_internet~equipe");
        $eq= $equipeFactory->get($equipe);

        if ($eq->passwordEquipe==$this->param('password')) {
            $eq->passwordEquipe=$this->param('passwordN');
            $equipeFactory->update($eq);
            return $this->accueil();
        }
        else return $this->erreur();
    }
 }   