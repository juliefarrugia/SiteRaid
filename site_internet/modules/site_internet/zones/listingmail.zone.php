<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class listingMailZone extends jZone {
    protected $_tplname='listingmail';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $utilisateurFactory = jDao::get("utilisateur");
        $conditions1 = jDao::createConditions();
        $conditions1->addCondition('profil','=','1');
        
        $participantFactory = jDao::get("participant");
        $conditions4 = jDao::createConditions();
        $conditions4->addCondition('velo','=','1');
        $conditions4->addCondition('bus','=','1');
        $conditions5 = jDao::createConditions();
        $conditions5->addCondition('bus','=','1');
        $conditions6 = jDao::createConditions();
        $conditions6->addCondition('bus','=','0');
        
        $equipeFactory = jDao::get("equipe");
        $conditions2 = jDao::createConditions();
        $conditions2->addCondition('typeRaid','=','Aventure');
        $conditions3 = jDao::createConditions();
        $conditions3->addCondition('typeRaid','=','Expert');
        
        $orga = $utilisateurFactory-> findBy($conditions1);
        $participant=$participantFactory->findAll();
        $participanta = $equipeFactory->findBy($conditions2);
        $participante = $equipeFactory->findBy($conditions3);
        $participantbv = $participantFactory->findBy($conditions4);
        $participantb = $participantFactory->findBy($conditions5);
        $participantm = $participantFactory->findBy($conditions6);
        
        $this->_tpl->assign('ALLORGA', $orga);
        $this->_tpl->assign('ALLPARTICIPANT', $participant);
        $this->_tpl->assign('ALLPARTICIPANTA', $participanta);
        $this->_tpl->assign('ALLPARTICIPANTE', $participante);
        $this->_tpl->assign('ALLPARTICIPANTBV', $participantbv);
        $this->_tpl->assign('ALLPARTICIPANTB', $participantb);
        $this->_tpl->assign('ALLPARTICIPANTM', $participantm);
    }
}
