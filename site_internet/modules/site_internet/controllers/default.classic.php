<?php

class defaultCtrl extends jController {

    function index() {

        $rep = $this->getResponse('html');
        $rep->bodyTpl ="main";
        $page=$this->param('page');
        
        if ($page=='accueil'){$rep->body->assignZone('PRINCIPAL', 'accueil');}
        else if ($page=='evenement'){$rep->body->assignZone('PRINCIPAL', 'evenement');}
        else if ($page=='raidLieu'){$rep->body->assignZone('PRINCIPAL', 'raidlieu');}
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
        else if ($page=='participantEtat'){$rep->body->assignZone('PRINCIPAL', 'participantetat');}
        else if ($page=='participantInformations'){$rep->body->assignZone('PRINCIPAL', 'participantinformations');}
        else if ($page=='participantEquipe'){$rep->body->assignZone('PRINCIPAL', 'participantequipe');}
        else if ($page=='profilParticipant'){$rep->body->assignZone('PRINCIPAL', 'profilparticipant');}
        else if ($page=='recapInscriptions'){$rep->body->assignZone('PRINCIPAL', 'recapinscriptions');}
        else if ($page=='equipeExpert'){$rep->body->assignZone('PRINCIPAL', 'equipeexpert');}
        else if ($page=='equipeAventure'){$rep->body->assignZone('PRINCIPAL', 'equipeaventure');}
        else if ($page=='modifierParticipant'){$rep->body->assignZone('PRINCIPAL', 'modifierparticipant');}
        else if ($page=='modifierEquipe'){$rep->body->assignZone('PRINCIPAL', 'modifierequipe');}
        else if ($page=='ajouterOrganisateur'){$rep->body->assignZone('PRINCIPAL', 'ajouterorganisateur');}
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
    
 
    /* A CREER !!!!

    function erreur(){
        $rep = $this->getResponse('html');
        $rep->bodyTpl ="main";
    }*/
    
     function accueil(){
         $rep = $this->getResponse('html');
         $rep->bodyTpl ="main";
         $utilisateur = jAuth::getUserSession();
         $profil = $utilisateur->profil; 
          if ($profil=='3'||$profil=='1'){$rep->body->assignZone('PRINCIPAL', 'recapinscriptions');}
          else if ($profil=='2'){$rep->body->assignZone('PRINCIPAL', 'profilparticipant');}
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
     
     function supprimerParticipant(){

        $participantFactory = jDao::get("site_internet~participant");
        $participantFactory->delete($this->param('login'));
        
        return $this->index();
     }
     
     function supprimerEquipe(){

        $equipeFactory = jDao::get("site_internet~equipe");
        $equipeFactory->delete($this->param('nomEquipe'));
        
        return $this->index();
     }



     function saveEquipe() {
        
        $newUser = jAuth::createUserObject ($this->param('login'), $this->param('password'));
        $newUser->profil = "2";
        $ok = jAuth::saveNewUser($newUser);
        
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
        $record2->login2= $this->param('login2');
        $record2->login3= $this->param('login3');
        $record2->login4= $this->param('login4');
        
        
        if ($ok==true&&$record->check()&& $record2->check() ) { 
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->insert($record2);
            
            return $this->index();}
        else { 
            return $this->erreur();
            
            }}                    
            
    function rejoindreEquipe () {

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
                
                return $rep;}
            
           else {return null;}} 

    } 
    
    function saveParticipant() {
        
        $newUser = jAuth::createUserObject ($this->param('login'), $this->param('password'));
        $newUser->profil = "2";
        $ok = jAuth::saveNewUser($newUser);

        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   

        $record = jDao::createRecord("site_internet~participant");
        $record2 = $inscriptionEquipe->get($this->param('nomEquipe'));
        
        $record->nomEquipe = $this->param('nomEquipe');
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
        $record->certifMedical = "0";
        $record->reglement = "0";
        $record->cheque = "0";
        $record->caution = "0";
        $record->validation = "0";
        
        if ($record2->login2==NULL){ $record2->login2= $this->param('login');}
        else if ($record2->login3==NULL){ $record2->login3= $this->param('login');}
        else if ($record2->login4==NULL){ $record2->login4= $this->param('login');}     
        
        if ($ok==true&&$record->check()&& $record2->check() ) { 
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->update($record2);
            
            return $this->index();}
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

        return $this->index();
            
            }     
            
       function saveEquipeAdmin() {
          
         $form=  jForms::fill('site_internet~equipeInfosAdmin', $this->param('nomEquipe'));
 
        if ($form->check()) {
            $result = $form->prepareDaoFromControls('site_internet~equipe');
            $equipeFactory=$result['dao'];
            $courantequipe=$result['daorec'];
            $equipeFactory->update($courantequipe);}

        return $this->index();
            
            }            
            
        function saveOrga() {
        
        $newUser = jAuth::createUserObject ($this->param('login'), $this->param('password'));
        $newUser->profil = "1";
        $ok = jAuth::saveNewUser($newUser);     
        
        if ($ok==true) {        
            return $this->index();}
        else { 
            return $this->erreur();}
            
            } 
            
 }    
            

