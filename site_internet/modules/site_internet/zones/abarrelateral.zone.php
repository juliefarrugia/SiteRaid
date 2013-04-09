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
        
        $equipeFactory = jDao::get("equipe");
        $listofAllEquipe = $equipeFactory->findAll();
        $this->_tpl->assign('ALLEQUIPE', $listofAllEquipe);
        
    }
}


//$equipeFactory = jDao::get("equipe");
        //$listofAllEquipe = $equipeFactory->findAll();
        //$contenu->body->assign('ALLEQUIPE', $listofAllEquipe);