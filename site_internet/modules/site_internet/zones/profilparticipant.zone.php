<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class profilParticipantZone extends jZone {
    protected $_tplname='profilparticipant';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $utilisateur = jAuth::getUserSession();
        $log = $utilisateur->login;
        $participantFactory = jDao::get("site_internet~participant");
        $participant = $participantFactory->get($log);
        $statut =$participant->statutParticipant;
        $velo=$participant->velo;
       
        if ($statut=="Etudiant" && $velo=="1"){$prix=65;};
        if ($statut=="Etudiant" && $velo=="0"){$prix=75;};
        if ($statut=="Salarie" && $velo=="1"){$prix=110;};
        if ($statut=="Salarie" && $velo=="0"){$prix=120;}
        
        $this->_tpl->assign('PRIX',$prix);
    }
}
