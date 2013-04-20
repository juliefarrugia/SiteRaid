<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class modifierequipebisZone extends jZone {
    protected $_tplname='modifierequipebis';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $log = $this->param('nomEquipe');
        $infosEquipeForm = jForms::create('site_internet~equipeInfosAdmin',$log);
        $infosEquipeForm->initFromDao("site_internet~equipe");
        $this->_tpl->assign('EQUIPEINFOS', $infosEquipeForm);
        
    }
}
