<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class modifierequipeZone extends jZone {
    protected $_tplname='modifierequipe';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $choixEquipeForm = jForms::create("site_internet~modifEquipe");
        $this->_tpl->assign("EQUIPE", $choixEquipeForm);

        $choixbEquipeForm = jForms::create("site_internet~delEquipe");
        $this->_tpl->assign("EQUIPESUP", $choixbEquipeForm);
    }
}
