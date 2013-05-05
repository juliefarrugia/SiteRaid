<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class equipeExpertZone extends jZone {
    protected $_tplname='equipeexpert';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $equipeFactory = jDao::get("equipe");
        $conditions = jDao::createConditions();
        $conditions->addCondition('typeRaid','=','Expert');
        $equipesE = $equipeFactory->findBy($conditions);
        $this->_tpl->assign('ALLEQUIPE', $equipesE);
        
        $participantsFactory = jDao::get("participant");
        $participantsE = $participantsFactory->findAll();
        $this->_tpl->assign('ALLPARTICIPANT', $participantsE);
    }
}
