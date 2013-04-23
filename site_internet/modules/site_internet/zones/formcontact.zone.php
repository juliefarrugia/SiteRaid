<?php
/**
* @package   site_internet
* @subpackage site_internet
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class formContactZone extends jZone {
    protected $_tplname='formcontact';

    protected function _prepareTpl(){
        //$this->_tpl->assign('foo','bar');
        
        $mail = jForms::create("site_internet~formContact");
        $this->_tpl->assign("MAIL", $mail);
        
    }
}
