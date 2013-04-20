<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class modifierparticipantbisZone extends jZone {
    protected $_tplname='modifierparticipantbis';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $log = $this->param('login');
        $infosParticipantForm = jForms::create('site_internet~participantInfosAdmin',$log);
        $infosParticipantForm->initFromDao("site_internet~participant");
        $this->_tpl->assign('PARTICIPANTINFOS', $infosParticipantForm);
        
    }
}
