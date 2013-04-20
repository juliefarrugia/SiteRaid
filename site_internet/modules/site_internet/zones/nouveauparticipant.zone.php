<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class nouveauParticipantZone extends jZone {
    protected $_tplname='nouveauparticipant';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        $paramidParticipant = $this->param('login',1);
        $nouveauParticipantForm = jForms::create("site_internet~inscriptionParticipantForm", $paramidParticipant);
        $this->_tpl->assign("FORMULAIRE2", $nouveauParticipantForm);
    }
}
