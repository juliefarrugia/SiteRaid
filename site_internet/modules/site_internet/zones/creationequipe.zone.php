<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class creationEquipeZone extends jZone {
    protected $_tplname='creationequipe';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');

         $paramidParticipant = $this->param('login',1);
         $inscriptionCreationForm = jForms::create("site_internet~inscriptionCreationForm", $paramidParticipant);
         $this->_tpl->assign("FORMULAIRE", $inscriptionCreationForm);
        
        
    }
}
