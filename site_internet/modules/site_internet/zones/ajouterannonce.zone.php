<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class ajouterAnnonceZone extends jZone {
    protected $_tplname='ajouterannonce';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $form = jForms::create("site_internet~ajoutAnnonce");
        $this->_tpl->assign("ANNONCE", $form);
        
    }
}
