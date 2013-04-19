<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class participantEquipeZone extends jZone {
    protected $_tplname='participantequipe';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $utilisateur = jAuth::getUserSession();
        $log = $utilisateur->login; 
        $participantFactory = jDao::get("site_internet~participant");
        $participant = $participantFactory->get($log);
        $equipe =$participant->nomEquipe;
        
        $form = jForms::create('site_internet~participantEquipe',$equipe);
        $form->initFromDao("site_internet~equipe");
        $this->_tpl->assign('EQUIPE', $form);

        
    }
}
