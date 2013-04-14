<?php

class defaultCtrl extends jController {

    function index() {
        
        //jAuth::logout();
        $page=$this->param('page');

        $rep = $this->getResponse('html');
        $rep->bodyTpl ="main";
        
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
        else if ($page=='creationequipe'){$rep->body->assignZone('PRINCIPAL', 'creationequipe');}
        else if ($page=='joindreequipe'){$rep->body->assignZone('PRINCIPAL', 'joindreequipe');}
        else if ($page=='nouveauparticipant'){$rep->body->assignZone('PRINCIPAL', 'nouveauparticipant');}
        else if ($page=='participantEtat'){$rep->body->assignZone('PRINCIPAL', 'participantetat');}
        else if ($page=='participantInformations'){$rep->body->assignZone('PRINCIPAL', 'participantinformations');}
        else if ($page=='participantEquipe'){$rep->body->assignZone('PRINCIPAL', 'participantequipe');}
        else {$rep->body->assignZone('PRINCIPAL', 'accueil');}    
            
        return $rep;
    }
    
    function connexion (){
        
        $login=$this->param('login');
        $password=$this->param('password');
        jAuth::login($login, $password,true);
        
        if (jAuth::isConnected()) {
            //echo "Connexion réussie";
            return $this->accueil();}
            else{
                //echo "Echec de Connexion";
                return $this ->erreurConnexion();}

    }
    
        function deconnexion (){
        
            jAuth::logout();
 
            return $this->index();


    }
    
    
    
    /*

    function erreurConnexion(){
        $rep = $this->getResponse('html');
        $rep->bodyTpl ="main";
    }*/
    
     function accueil(){
         $rep = $this->getResponse('html');
         $rep->bodyTpl ="main";
         $utilisateur = jAuth::getUserSession();
         $profil = $utilisateur->profil; 
          if ($profil=='0'){$rep->body->assignZone('PRINCIPAL', 'profiladministrateur');
          }
          else if ($profil=='1'){$rep->body->assignZone('PRINCIPAL', 'profilorganisateur');}
          else if ($profil=='2'){$rep->body->assignZone('PRINCIPAL', 'profilparticipant');}
         return $rep ;
     }
    
    
    /*function saveEquipe() {
        
        $inscriptionUtilisateur = jDao::get("site_internet~utilisateur");
        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   
        
        $record1 = jDao::createRecord("site_internet~utilisateur");
        $record = jDao::createRecord("site_internet~participant");
        $record2 = jDao::createRecord("site_internet~equipe");
        
        $record1->login = $record->login = $this->param('login');
        $record1->password = $this->param('password');
        $record1->profil = "2";

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
        $record->nomEquipe = $this->param('nomEquipe');
        
        $record2->nomEquipe = $this->param('nomEquipe');
        $record2->passwordEquipe = $this->param('passwordEquipe');
        $record2->telEquipe= $this->param('telEquipe');
        $record2->typeRaid = $this->param('typeRaid');
        $record2->login1= $this->param('login');
        $record2->login2= $this->param('login2');
        $record2->login3= $this->param('login3');
        $record2->login4= $this->param('login4');
        
        
        if ($record->check()&& $record2->check() ) { 
            $inscriptionUtilisateur->insert($record1);
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->insert($record2);
            
            return $this->index();}
        else { 
            //return $this->addEquipe();
            
            }  
        
            }                    
            
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

        $inscriptionUtilisateur = jDao::get("site_internet~utilisateur");
        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   
        
        $record1 = jDao::createRecord("site_internet~utilisateur");
        $record = jDao::createRecord("site_internet~participant");
        $record2 = $inscriptionEquipe->get($this->param('nomEquipe'));
        
        $record->nomEquipe = $this->param('nomEquipe');
        $record1->login = $record->login = $this->param('login');
        
        $record1->password = $this->param('password');
        $record1->profil = "2";
        
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
        
        if ($record2->login2==NULL){ $record2->login2= $this->param('login');}
        else if ($record2->login3==NULL){ $record2->login3= $this->param('login');}
        else if ($record2->login4==NULL){ $record2->login4= $this->param('login');}     
        
        if ($record->check()&& $record2->check() ) { 
            $inscriptionUtilisateur->insert($record1);
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->update($record2);
            
            return $this->index();}
        else { 
            //return $this->addParticipant();
            
            }  
        
            }   */  
 
}


        /*<property name="nomEquipe" fieldname="nomEquipe" datatype="varchar" required="true" maxlength="50"/>
        <property name="passwordEquipe" fieldname="passwordEquipe" datatype="varchar" required="true" maxlength="10"/>
        <property name="typeRaid" fieldname="typeRaid" datatype="varchar" required="true" maxlength="15"/>
        <property name="categorieEquipe" fieldname="categorieEquipe" datatype="varchar" required="true" maxlength="15"/>
        <property name="telEquipe" fieldname="telEquipe" datatype="varchar" required="true" minlength="11" maxlength="11"/>
        <property name="mailParticipant1" fieldname="mailParticipant1" datatype="varchar" required="true" maxlength="50"/>
        <property name="mailParticipant2" fieldname="mailParticipant2" datatype="varchar" maxlength="50"/>
        <property name="mailParticipant3" fieldname="mailParticipant3" datatype="varchar" maxlength="50"/>
        <property name="mailParticipant4" fieldname="mailParticipant4" datatype="varchar" maxlength="50"/>
        <property name="nomParticipant1" fieldname="nomParticipant" datatype="varchar"  table="Participant1"/>
        <property name="prenomParticipant1" fieldname="prenomParticipant" datatype="varchar" required="true" table="Participant1"/>
        <property name="nomParticipant2" fieldname="nomParticipant" datatype="varchar" table="Participant2"/>
        <property name="prenomParticipant2" fieldname="prenomParticipant" datatype="varchar" table="Participant2"/>
        <property name="nomParticipant3" fieldname="nomParticipant" datatype="varchar" table="Participant3"/>
        <property name="prenomParticipant3" fieldname="prenomParticipant" datatype="varchar" table="Participant3"/>
        <property name="nomParticipant4" fieldname="nomParticipant" datatype="varchar" table="Participant4"/>
        <property name="prenomParticipant4" fieldname="prenomParticipant" datatype="varchar" table="Participant4"/>
         * 
         * 
         * 
         * <primarytable name="equipe" realname="equipe" primarykey="nomEquipe" />
        <foreigntable name="Participant1" realname="participant" primarykey="mailParticipant" onforeignkey="mailParticipant1"/>
        <foreigntable name="Participant2" realname="participant" primarykey="mailParticipant" onforeignkey="mailParticipant2"/>
        <foreigntable name="Participant3" realname="participant" primarykey="mailParticipant" onforeignkey="mailParticipant3"/>
        <foreigntable name="Participant4" realname="participant" primarykey="mailParticipant" onforeignkey="mailParticipant4"/>
         */ 