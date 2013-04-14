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
        $listofAllEquipe = $equipeFactory->findAll();
        $this->_tpl->assign('ALLEQUIPE', $listofAllEquipe);
        
    }
}
