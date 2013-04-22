<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class AbarreLateralZone extends jZone {
    protected $_tplname='abarrelateral';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $paramidConnexion = $this->param('login',1);
        $connexionUser = jForms::create("site_internet~connexionUser", $paramidConnexion);
        $this->_tpl->assign('CONNEXION', $connexionUser);
        
        $equipeFactory = jDao::get("equipe");
        $listofAllEquipe = $equipeFactory->findSome();
        $this->_tpl->assign('ALLEQUIPE', $listofAllEquipe);
        
        $ok=jAuth::isConnected();
        $utilisateur = jAuth::getUserSession();
        $profil = $utilisateur->profil; 
        $log = $utilisateur->login;
        $this->_tpl->assign('PROFIL', $profil);
        $this->_tpl->assign('OK', $ok);
        if ($profil=='3'){$this->_tpl->assign('BIENVENUE', 'Bienvenue admin');}
        if ($profil=='1'){$this->_tpl->assign('BIENVENUE', 'Bienvenue organisateur');}
        if ($profil=='2'){
         
        $participantFactory = jDao::get("site_internet~participant");
        $participant = $participantFactory->get($log);
        
            
            
            $this->_tpl->assign('BIENVENUE', 'Bienvenue '. $participant->prenomParticipant . ' ' . $participant->nomParticipant);}
          ;
        
    }
}
