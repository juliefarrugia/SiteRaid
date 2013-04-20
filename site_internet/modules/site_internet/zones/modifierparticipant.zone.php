<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class modifierParticipantZone extends jZone {
    protected $_tplname='modifierparticipant';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $choixParticipantForm = jForms::create("site_internet~modifParticipant");
        $this->_tpl->assign("PARTICIPANT", $choixParticipantForm);

        $choixbParticipantForm = jForms::create("site_internet~delParticipant");
        $this->_tpl->assign("PARTICIPANTSUP", $choixbParticipantForm);
    }
    
}

