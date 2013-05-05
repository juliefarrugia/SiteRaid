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
        $conditions12 = jDao::createConditions();
        $conditions12->addCondition('prixpaye','!=',null);
        
        $conditions13 = jDao::createConditions();
        $conditions13->addCondition('tailleMaillot','=','XS');
        $conditions14 = jDao::createConditions();
        $conditions14->addCondition('tailleMaillot','=','S');
        $conditions15 = jDao::createConditions();
        $conditions15->addCondition('tailleMaillot','=','M');
        $conditions16 = jDao::createConditions();
        $conditions16->addCondition('tailleMaillot','=','L');
        $conditions17 = jDao::createConditions();
        $conditions17->addCondition('tailleMaillot','=','XL');

        
        
        
        
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
        
        $xs = $participantFactory->countBy($conditions13);
        $s = $participantFactory->countBy($conditions14);
        $m = $participantFactory->countBy($conditions15);
        $l = $participantFactory->countBy($conditions16);
        $xl = $participantFactory->countBy($conditions17);

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
        
        $this->_tpl->assign('XS', $xs);
        $this->_tpl->assign('S', $s);
        $this->_tpl->assign('M', $m);
        $this->_tpl->assign('L', $l);
        $this->_tpl->assign('XL', $xl);
        
    }
}
