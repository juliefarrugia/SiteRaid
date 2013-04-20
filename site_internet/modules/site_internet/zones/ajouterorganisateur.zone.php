<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class ajouterOrganisateurZone extends jZone {
    protected $_tplname='ajouterorganisateur';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
         $paramidOrga = $this->param('login',1);
         $orgaCreationForm = jForms::create("site_internet~nouveauOrga", $paramidOrga);
         $this->_tpl->assign("ORGA", $orgaCreationForm);
        
    }
}
