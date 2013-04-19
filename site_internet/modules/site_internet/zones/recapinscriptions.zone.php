<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class recapInscriptionsZone extends jZone {
    protected $_tplname='recapinscriptions';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $participantFactory = jDao::get("participant");
        $conditions1 = jDao::createConditions();
        $conditions1->addCondition('statutParticipant','=','Etudiant');
        $conditions2 = jDao::createConditions();
        $conditions2->addCondition('statutParticipant','=','Salarie');
        $conditions5 = jDao::createConditions();
        $conditions5->addCondition('velo','=','0');
        $conditions6 = jDao::createConditions();
        $conditions6->addCondition('velo','=','1');
        $conditions6->addCondition('bus','=','1');
        $conditions7 = jDao::createConditions();
        $conditions7->addCondition('validation','=','1');
        $conditions8 = jDao::createConditions();
        $conditions8->addCondition('bus','=','1');
        $conditions9 = jDao::createConditions();
        $conditions9->addCondition('login','!=',null);
        $conditions11 = jDao::createConditions();
        $conditions11->addCondition('cheque','=','1');
        
        
        $equipeFactory = jDao::get("equipe");
        $conditions3 = jDao::createConditions();
        $conditions3->addCondition('typeRaid','=','Aventure');
        $conditions4 = jDao::createConditions();
        $conditions4->addCondition('typeRaid','=','Expert');
        $conditions10 = jDao::createConditions();
        $conditions10->addCondition('nomEquipe','!=',null);

        $nbparticipantse = $participantFactory->countBy($conditions1);
        $nbparticipantss = $participantFactory->countBy($conditions2);
        $nbequipesa = $equipeFactory->countBy($conditions3);
        $nbequipese = $equipeFactory->countBy($conditions4);
        $nbvelos = $participantFactory->countBy($conditions5);
        $nbveloslille = $participantFactory->countBy($conditions6);
        $nbvalidees = $participantFactory->countBy($conditions7);
        $nbparticipantsb = $participantFactory->countBy($conditions8);
        $nbparticipants = $participantFactory->countBy($conditions9);
        $nbequipes = $equipeFactory->countBy($conditions10);
        $nbpayees = $participantFactory->countBy($conditions11);

        $this->_tpl->assign('NBPARTICIPANTSE', $nbparticipantse);
        $this->_tpl->assign('NBPARTICIPANTSS', $nbparticipantss);
        $this->_tpl->assign('NBEQUIPESA', $nbequipesa);
        $this->_tpl->assign('NBEQUIPESE', $nbequipese);
        $this->_tpl->assign('NBVELOS', $nbvelos);
        $this->_tpl->assign('NBVELOSLILLE', $nbveloslille);
        $this->_tpl->assign('NBVALIDEES', $nbvalidees);
        $this->_tpl->assign('NBPARTICIPANTSB', $nbparticipantsb);
        $this->_tpl->assign('NBPARTICIPANTS', $nbparticipants);
        $this->_tpl->assign('NBEQUIPES', $nbequipes);
        $this->_tpl->assign('NBPAYEES', $nbpayees);
    }
}
