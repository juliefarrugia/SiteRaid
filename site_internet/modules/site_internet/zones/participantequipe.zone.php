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
        
        $equipeFactory = jDao::get("site_internet~equipe");
        $eq= $equipeFactory->get($equipe);
        
        $form = jForms::create('site_internet~participantEquipe',$equipe);
        $form->initFromDao("site_internet~equipe");
        $this->_tpl->assign('EQUIPE', $form);
        
        $place=3;
        
        if ($log==($eq->login1)){ $chef="1";
            if ($eq->login2!==""){$place=$place-1;}
            if ($eq->login3!==""){$place=$place-1;}
            if ($eq->login4!==""){$place=$place-1;}};
        
        $mail = jForms::create("site_internet~mailP");
        $this->_tpl->assign("MAIL", $mail);
        $this->_tpl->assign("CHEF", $chef);
        $this->_tpl->assign("PLACE", $place);
        
    }
}
