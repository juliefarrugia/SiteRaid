<?php

class defaultCtrl extends jController {

    function index() {
        
        $rep = $this->getResponse('html');
        $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/menu.css');
        $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/reste.css');
        $rep->addCssLink(jApp::config()->urlengine['basePath'].'css/jquery-ui.css');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery.min.js'); 
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery-ui.min.js');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/connexion.js');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/rejoindre.js');
        $rep->bodyTpl ="main";
        //$rep->bodyTpl->assign("menu");

        $equipeFactory = jDao::get("equipe");
        $listofAllEquipe = $equipeFactory->findAll();
        $rep->body->assign('ALLEQUIPE', $listofAllEquipe);
        
        return $rep;
    }
    
    function connexion () {

           if (jApp::coord()->request->isAjax()){
               
               $participantFactory = jDao::get("participant");
               $conditions1= jDao::createConditions();
               $conditions1->addCondition('mailParticipant','=',$this->param('login'));
               $conditions1->addCondition('passwordParticipant','=',$this->param('password'));
               
               $participantList = $participantFactory->findBy($conditions1);
               $participants = $participantList->FetchAll();
               
               $organisateurFactory = jDao::get("organisateur");
               $conditions2= jDao::createConditions();
               $conditions2->addCondition('mailOrga','=',$this->param('login'));
               $conditions2->addCondition('passwordOrga','=',$this->param('password'));
               
               $organisateurList = $organisateurFactory->findBy($conditions2);
               $organisateurs = $organisateurList->FetchAll();
               
               $administrateurFactory = jDao::get("administrateur");
               $conditions3= jDao::createConditions();
               $conditions3->addCondition('mailAdmin','=',$this->param('login'));
               $conditions3->addCondition('passwordAdmin','=',$this->param('password'));
               
               $administrateurList = $administrateurFactory->findBy($conditions3);
               $administrateurs = $administrateurList->FetchAll();
               
               
           if (sizeof ($participants)==1 || sizeof ($organisateurs)==1 || sizeof ($administrateurs)==1){
                $rep=$this->getResponse('json');
                return $rep;}
           else {return null;}} 
           
           
    }
    
    function sinscrire () {
        
        $rep = $this->getResponse('html');
        $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/menu.css');
        $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/reste.css');
        $rep->addCssLink(jApp::config()->urlengine['basePath'].'css/jquery-ui.css');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery.min.js'); 
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery-ui.min.js');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/connexion.js');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/rejoindre.js');
        $rep->bodyTpl = "inscription";

        $equipeFactory = jDao::get("equipe");
        $listofAllEquipe = $equipeFactory->findAll();
        $rep->body->assign('ALLEQUIPE', $listofAllEquipe);
        

        return $rep;
    }
    
    function addEquipe() {
        
         $rep = $this->getResponse('html');
         $rep->bodyTpl = "creationEquipe";

         $equipeFactory = jDao::get("equipe");
         $listofAllEquipe = $equipeFactory->findAll();
         $rep->body->assign('ALLEQUIPE', $listofAllEquipe);

         $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/menu.css');
         $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/reste.css');
         $rep->addCssLink(jApp::config()->urlengine['basePath'].'css/jquery-ui.css');
         $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery.min.js'); 
         $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery-ui.min.js');
         $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/connexion.js');
         $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/rejoindre.js');

         $paramidParticipant = $this->param('mailParticipant',1);
         $inscriptionCreationForm = jForms::create("site_internet~inscriptionCreationForm", $paramidParticipant);
         $rep->body->assign("FORMULAIRE", $inscriptionCreationForm);
        
         return $rep;   
   }    
    
     function saveEquipe() {

        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   
        
        $record = jDao::createRecord("site_internet~participant");
        $record2 = jDao::createRecord("site_internet~equipe");

        $record->mailParticipant = $this->param('mailParticipant');
        $record->passwordParticipant = $this->param('passwordParticipant');
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
        $record2->mailParticipant1= $this->param('mailParticipant');
        $record2->mailParticipant2= $this->param('mailParticipant2');
        $record2->mailParticipant3= $this->param('mailParticipant3');
        $record2->mailParticipant4= $this->param('mailParticipant4');
        
        
        if ($record->check()&& $record2->check() ) { 
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->insert($record2);
            
            return $this->index();}
        else { return $this->addEquipe();}  
        
            }              
            
     function index2() {
        
        $rep = $this->getResponse('html');
        $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/menu.css');
        $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/reste.css');
        $rep->addCssLink(jApp::config()->urlengine['basePath'].'css/jquery-ui.css');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery.min.js'); 
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery-ui.min.js');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/connexion.js');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/rejoindre.js');
        $rep->bodyTpl = "joindreEquipe";

        $equipeFactory = jDao::get("equipe");
        $listofAllEquipe = $equipeFactory->findAll();
        $rep->body->assign('ALLEQUIPE', $listofAllEquipe);
        
        return $rep;
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
           
           return $this->index2();
    } 
    
    function addParticipant() {
        
        $rep = $this->getResponse('html');
        $rep->bodyTpl = "nouveauParticipant";

        $equipeFactory = jDao::get("equipe");
        $listofAllEquipe = $equipeFactory->findAll();
        $rep->body->assign('ALLEQUIPE', $listofAllEquipe);

        $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/menu.css');
        $rep->addCSSLink(jApp::config()->urlengine['basePath'].'css/reste.css');
        $rep->addCssLink(jApp::config()->urlengine['basePath'].'css/jquery-ui.css');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery.min.js'); 
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/jquery-ui.min.js');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/connexion.js');
        $rep->addJSLink(jApp::config()->urlengine['basePath'].'js/rejoindre.js');

        $paramidParticipant = $this->param('mailParticipant',1);
        $inscriptionParticipantForm = jForms::create("site_internet~inscriptionParticipantForm", $paramidParticipant);
        $rep->body->assign("FORMULAIRE2", $inscriptionParticipantForm);
        
         return $rep;   
   }
    
     function saveParticipant() {

        $inscriptionParticipant = jDao::get("site_internet~participant");
        $inscriptionEquipe = jDao::get("site_internet~equipe");   
        
        $record = jDao::createRecord("site_internet~participant");
        $record2 = $inscriptionEquipe->get($this->param('nomEquipe'));
        
        $record->nomEquipe = $this->param('nomEquipe');
       
        $record->mailParticipant = $this->param('mailParticipant');
        $record->passwordParticipant = $this->param('passwordParticipant');
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
        
        if ($record2->mailParticipant2==NULL){ $record2->mailParticipant2= $this->param('mailParticipant');}
        else if ($record2->mailParticipant3==NULL){ $record2->mailParticipant3= $this->param('mailParticipant');}
        else if ($record2->mailParticipant4==NULL){ $record2->mailParticipant4= $this->param('mailParticipant');}     
        
        if ($record->check()&& $record2->check() ) { 
            $inscriptionParticipant->insert($record);
            $inscriptionEquipe->update($record2);
            
            return $this->index();}
        else { return $this->addParticipant();}  
        
            }     
   
        
        
        
    
            
            
            
            
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