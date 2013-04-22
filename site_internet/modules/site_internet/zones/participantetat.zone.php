<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class participantEtatZone extends jZone {
    protected $_tplname='participantetat';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $utilisateur = jAuth::getUserSession();
        $log = $utilisateur->login; 

        $form = jForms::create('site_internet~participantEtat',$log);
        $form->initFromDao("site_internet~participant");
        $this->_tpl->assign('ETAT', $form);
        
        
    }
}
