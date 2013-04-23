<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class equipeAventureZone extends jZone {
    protected $_tplname='equipeaventure';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $equipeFactory = jDao::get("equipe");
        $conditions = jDao::createConditions();
        $conditions->addCondition('typeRaid','=','Aventure');
        $equipesA = $equipeFactory->findBy($conditions);
        $this->_tpl->assign('ALLEQUIPE', $equipesA);
        
        $participantsFactory = jDao::get("equipe");
        $participantsA = $participantsFactory->findAll;
        $this->_tpl->assign('ALLPARTICIPANT', $participantsA);
        
        
        
    }
}
